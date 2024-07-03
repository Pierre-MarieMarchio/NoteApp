<?php

namespace Core;

use Exception;

class Container
{
    private $services = [];

    public function addContainer($key, $value)
    {

        $this->services[$key] = $value;
    }

    public function getContainer($key)
    {
        if (!array_key_exists($key, $this->services)) {
            throw new Exception("services[$key] not found");
        }

        $value = $this->services[$key];

        return call_user_func($value);
    }

}
