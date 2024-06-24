<?php

require __DIR__ . ('/../../class/Validator.php');

$config = require __DIR__ . '/../../config.php';
$db = Database::getInstance($config['database']);


$headerName = 'Create Note';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (!Validator::validateString($_POST['body'], 1, 1000)) {

        $errors['body'] = 'min lent is 1 character and max lent is 1000 characters';
    }

    if(!Validator::validateString($_POST['title'], 1, 255)) {

        $errors['title'] = 'min lent is 1 character and max lent is 255 characters';
    }
 

    if (empty($errors)) {
        $db->query('INSERT INTO notes(note_Title, note_Body, user_ID)
         VALUES(:title, :body, :user_id)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);
        console_log("note submited");
    }
};


?>

<?php require __DIR__. '/../../views/notes/create.view.php'; ?>