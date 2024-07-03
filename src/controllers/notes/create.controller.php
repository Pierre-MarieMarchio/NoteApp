<?php

use Core\Database;
use Core\App;

$db = App::container()->getContainer(Database::class);
$errors = [];




view('notes/create.view.php', [
    'headerName' => 'Create Note',
    'errors' => $errors
]);
