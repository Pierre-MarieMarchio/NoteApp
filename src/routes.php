<?php

$router->get('/','/controllers/index.controller.php');

$router->get('/notes', '/controllers/notes/index.controller.php');
$router->get('/notes/create', '/controllers/notes/create.controller.php');
$router->post('/notes/create', '/controllers/notes/create.controller.php');

$router->get('/note', '/controllers/notes/show.controller.php');
$router->delete('/note','/controllers/destroy.controller.php');