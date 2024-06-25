<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = urldecode($uri);

$routes = require __DIR__ . base_path('routes.php');

function abort($error = 404)
{
    http_response_code($error);
    require __DIR__ . base_path('/views/errors/' . $error . '.php');
    die();
}

function routeToController($uri, $routes)
{
    
    if (array_key_exists($uri, $routes)) {
        require __DIR__ .base_path($routes[$uri]);
    } else {
        
        abort();
    };
}

routeToController($uri, $routes);
