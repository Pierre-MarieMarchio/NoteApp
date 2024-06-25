<?php

use Core\Database;

$config = require __DIR__ . '/../../config.php';
$db = Database::getInstance($config['database']);


$currentUserId = 1;
$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetchOrFail();
authorize($note['user_ID'] === $currentUserId);

view('notes/show.view.php', [
    'headerName' => "Note",
    'note' => $note
]);
