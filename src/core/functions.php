<?php

use Core\Responses;

function console_log($data)
{
    echo "<script>console.log(" . json_encode($data) . ");</script>";
}

function authorize($condition, $status = Responses::FORBIDDEN)
{
    if (!$condition) {
        // abort($status);
    };
    console_log($status);

    console_log($condition);
}


function base_path($path)
{
    return  BASE_PATH . $path;
}


function view($path, $atributes = []) 
{
    extract($atributes);
    require __DIR__ . base_path('views/' . $path);
}