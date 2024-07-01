<?php

const BASE_PATH = '/../';

require __DIR__ . BASE_PATH . 'src/core/functions.php';

spl_autoload_register(function($class){

    $result =str_replace('\\', DIRECTORY_SEPARATOR ,$class);
    require __DIR__. base_path("src/{$result}.php");
});

$router = new \Core\Router();


$routes = require __DIR__ . '/../src/routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
