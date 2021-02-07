<?php

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle)
    {
        return '' === $needle || false !== strpos($haystack, $needle);
    }
}

if (!function_exists('ctype_digit')) {
    function ctype_digit($input)
    {
        if (is_int($input)) {
            if ($input < -128 || $input > 255) {
                $input = (string)$input;
            } elseif ($input < 0) {
                $input = \chr($input + 256);
            } else {
                $input = \chr($input);
            }
        }

        return \is_string($input) && '' !== $input && !preg_match('/\D/', $input);
    }
}

if (!function_exists('each')) {
    function each(array &$array) {
        $key = key($array);

        if (!$key) {
            return false;
        }

        $value = current($array);

        next($array);

        return [$key, $value];
    }
}
