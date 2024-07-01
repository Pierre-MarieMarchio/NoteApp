<?php

use Core\Database;

$config = require __DIR__ . '/../../config.php';
$db = Database::getInstance($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $currentUserId = 1;
    $note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetchOrFail();
    authorize($note['user_ID'] === $currentUserId);

    $db->query("delete from notes where id = :id", ['id' => $_GET['id']]);

    header('location: /notes');
    exit();
    
} else {

    $currentUserId = 1;
    $note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetchOrFail();
    authorize($note['user_ID'] === $currentUserId);

    view('notes/show.view.php', [
        'headerName' => "Note",
        'note' => $note
    ]);
}
