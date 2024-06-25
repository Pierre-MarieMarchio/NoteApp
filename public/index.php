<?php

const BASE_PATH = '/../';

require __DIR__ . BASE_PATH . 'src/core/functions.php';

spl_autoload_register(function($class){

    $result =str_replace('\\', DIRECTORY_SEPARATOR ,$class);
    require __DIR__. base_path("src/{$result}.php");
});

require __DIR__ . base_path('/src/core/router.php') ;
