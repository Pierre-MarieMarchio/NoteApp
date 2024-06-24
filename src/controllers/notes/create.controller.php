<?php

require __DIR__ . ('/../../Validator.php');

$config = require __DIR__ . '/../../config.php';
$db = Database::getInstance($config['database']);


$headerName = 'Create Note';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $errors = [];

    if (!Validator::validateString($_POST['body'], 1, 1000)) {

        $errors['body'] = 'min lent is 1 character and max lent is 1000 characters';
        console_log("note not submited min lent is 1 character and maximum length is 1000 caracters");
    }


    if (empty($errors)) {
        $db->query('INSERT INTO notes(note_Title, user_ID)
         VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);
        console_log("note submited");
    }
};


?>

<?php require __DIR__. '/../../views/notes/create.view.php'; ?>