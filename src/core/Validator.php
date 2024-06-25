<?php

namespace Core;


class Validator
{

    public static function validateString($value, $min = 1, $max = 10000)
    {

        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function validateEmail($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
