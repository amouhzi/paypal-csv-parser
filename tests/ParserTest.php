<?php

namespace Amouhzi\PaypalCsvParser\Test;

use Amouhzi\PaypalCsvParser\CsvHeaders;
use Amouhzi\PaypalCsvParser\InvalidPaypalCsvFile;
use Amouhzi\PaypalCsvParser\Parser;
use Amouhzi\PaypalCsvParser\Statement;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    /**
     * @throws InvalidPaypalCsvFile
     *
     * @dataProvider testParseProvider
     */
    public function testParse1($file)
    {
        $parser = new Parser(new CsvHeaders());

        self::assertEquals(
            include __DIR__ . "/stubs/$file.php",
            array_map(static function (Statement $statement) {
                return (array)$statement;
            }, $parser->parse(__DIR__ . "/stubs/$file.csv"))
        );
    }

    public function testParseProvider()
    {
        return [
            ['basic'], // https://raw.githubusercontent.com/cmbuckley/paypal-history/master/test/etc/csv/basic.csv
            ['example1'],
            ['example2'],
            ['SampleFile'], // from https://raw.githubusercontent.com/mrjcleaver/paypal2kashoo
            ['SampleFile.csv-output-2011-09-02'], // from https://raw.githubusercontent.com/mrjcleaver/paypal2kashoo
        ];
    }

    /**
     * @throws InvalidPaypalCsvFile
     */
    public function testParseShouldThrowExceptionWhenFilePassedIsNotValid()
    {
        $parser = new Parser(new CsvHeaders());

        $this->expectException(InvalidPaypalCsvFile::class);

        $parser->parse(__DIR__ . '/stubs/invalid-example.csv');
    }

    public function testSupports()
    {
        $parser = new Parser(new CsvHeaders());
        $filePath = tempnam(sys_get_temp_dir(), 'paypal-csv-parser-test');
        self::assertFalse($parser->supports($filePath));
    }

    public function testSupportsShouldThrowExceptionWhenArgumentPassedIsNotString()
    {
        $parser = new Parser(new CsvHeaders());
        $this->expectException(\InvalidArgumentException::class);
        $parser->supports(123);
    }

    public function testSupportsShouldThrowExceptionWhenArgumentPassedIsNotValidFile()
    {
        $parser = new Parser(new CsvHeaders());
        $this->expectException(\InvalidArgumentException::class);
        $parser->supports('FILEPATH');
    }

    /**
     * @throws InvalidPaypalCsvFile
     */
    public function testParseShouldThrowExceptionWhenArgumentPassedIsNotString()
    {
        $parser = new Parser(new CsvHeaders());
        $this->expectException(\InvalidArgumentException::class);
        $parser->parse(123);
    }

    /**
     * @throws InvalidPaypalCsvFile
     */
    public function testParseShouldThrowExceptionWhenArgumentPassedIsNotValidFile()
    {
        $parser = new Parser(new CsvHeaders());
        $this->expectException(\InvalidArgumentException::class);
        $parser->parse('FILEPATH');
    }
}
