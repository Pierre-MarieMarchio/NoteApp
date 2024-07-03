<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::container()->getContainer(Database::class);
$errors = [];




if (!Validator::validateString($_POST['body'], 1, 1000)) {

    $errors['body'] = 'min lent is 1 character and max lent is 1000 characters';
}

if (!Validator::validateString($_POST['title'], 1, 255)) {

    $errors['title'] = 'min lent is 1 character and max lent is 255 characters';
}

if (!empty($errors)) {

    return view('notes/create.view.php', [
        'headerName' => 'Create Note',
        'errors' => $errors,
    ]);
}


if (empty($errors)) {
    $db->query('INSERT INTO notes(note_Title, note_Body, user_ID)
         VALUES(:title, :body, :user_id)', [
        'title' => $_POST['title'],
        'body' => $_POST['body'],
        'user_id' => 1,
    ]);

    header('location: /notes');
    exit();
}


return  view('notes/create.view.php', [
    'headerName' => 'Create Note',
    'errors' => $errors
]);
