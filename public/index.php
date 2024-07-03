<?php

use Core\Database;
use Core\Container;
use Core\Router;
use Core\App;



const BASE_PATH = '/../';
require __DIR__ . BASE_PATH . 'src/core/functions.php';

// AUTOLOAD CLASS

spl_autoload_register(function ($class) {

    $result = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require __DIR__ . base_path("/src/{$result}.php");
});

// SERVICES CONTAINER

$servicesContainer = new Container();

$servicesContainer->addContainer('Core\Database', function () {
    $config = require __DIR__ . base_path('/src/config.php');
    return Database::getInstance($config['database']);
});

App::setContainer($servicesContainer);

 
// ROUTEUR

$router = new Router();
$routes = require __DIR__ . '/../src/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
