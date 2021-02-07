<?php

namespace Amouhzi\PaypalCsvParser;

class Parser
{
    /**
     * @var CsvHeaders
     */
    private $csvHeaders;

    public function __construct(CsvHeaders $csvHeaders)
    {
        $this->csvHeaders = $csvHeaders;
    }

    /**
     * @param string $filePath
     *
     * @return bool
     */
    public function supports($filePath)
    {
        if (!is_string($filePath)) {
            throw new \InvalidArgumentException(
                sprintf('%s() expects parameter 1 to be string, %s given', __METHOD__, gettype($filePath)));
        }

        if (!is_file($filePath)) {
            throw new \InvalidArgumentException("$filePath is not a valid file.");
        }

        $file = fopen($filePath, 'rb');
        $line = $this->getFirstLine($file) ?: [];
        fclose($file);

        return $this->csvHeaders->isValid($line);
    }

    /**
     * @param string $filePath
     *
     * @return array
     * @throws InvalidPaypalCsvFile
     */
    public function parse($filePath)
    {
        if (!is_string($filePath)) {
            throw new \InvalidArgumentException(sprintf(
                '%s() expects parameter 1 to be string, %s given',
                __METHOD__,
                gettype($filePath)
            ));
        }

        if (!is_file($filePath)) {
            throw new \InvalidArgumentException("$filePath is not a valid file.");
        }

        if (!$this->supports($filePath)) {
            throw new InvalidPaypalCsvFile("$filePath is not a valid paypal file.");
        }

        $file = fopen($filePath, 'rb');

        $data = [];

        $headers = $this->csvHeaders->getHeaders($this->getFirstLine($file));
        $countHeaders = count($headers);

        while (false !== ($raw = fgets($file))) {
            $raw = str_getcsv($raw);

            array_walk($raw, static function (&$value) {
                if ('' === $value) {
                    $value = null;
                } elseif (ctype_digit($value)) {
                    $value = (int)$value;
                } elseif (is_numeric($numeric = str_replace(['.', ','], ['', '.'], $value))) {
                    $value = (float)$numeric;
                }
            });

            if (array_key_exists($countHeaders, $raw) && empty($raw[$countHeaders])) {
                unset($raw[$countHeaders]);
            }

            $row = array_combine($headers, $raw);

            list($day, $month, $year) = explode('/', $row['date']);
            list($hour, $minute, $second) = explode(':', $row['time']);

            try {
                $row['datetime'] = new \DateTime(
                    "$year-$month-${day}T$hour:$minute:$second",
                    new \DateTimeZone($row['timeZone'])
                );
            } catch (\Exception $e) {
                throw new \LogicException($e->getMessage(), $e->getCode(), $e);
            }

            unset($row['date'], $row['time'], $row['timeZone']);

            $row['status'] = $this->fixStatus($row['status']);

            $object = new Statement();

            foreach ($row as $key => $value) {
                $object->$key = $value;
            }

            $data[] = $object;
        }

        return $data;
    }

    private function getFirstLine($file)
    {
        $content = fgets($file);

        if (false === $content) {
            return null;
        }

        return array_filter(array_map(static function ($header) {
            return trim($header);
        }, str_getcsv(str_replace(' ', ' ', ltrim($content, '﻿')))), static function ($header) {
            return !empty($header);
        });
    }

    private function fixStatus($status)
    {
        if ('Terminé' === $status) {
            return Statement::STATUS_COMPLETED;
        }

        return $status;
    }
}
