<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = rtrim($uri, '/'); 
$uri = urldecode($uri); 

$routes =[
    '/NoteApp' => '/controllers/index.controller.php',
    '/NoteApp/notes' => '/controllers/notes.controller.php',
    '/NoteApp/note' => '/controllers/note.controller.php',
];

function abort($error = 404) {
    http_response_code($error);
    require __DIR__ . '/views/'.$error.'.php';
    die();
}

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require __DIR__ . $routes[$uri];
    } else {
        abort();

    };
}

routeToController($uri, $routes);


?>