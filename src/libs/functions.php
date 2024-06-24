<?php

function console_log($data)
{
    echo "<script>console.log(" . json_encode($data) . ");</script>";
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    };
    console_log($status);

    console_log($condition);
}
