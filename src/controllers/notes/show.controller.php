<?php

use Core\Database;
use Core\App;

$db = App::container()->getContainer(Database::class);

$currentUserId = 1;
$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetchOrFail();
authorize($note['user_ID'] === $currentUserId);

view('notes/show.view.php', [
    'headerName' => "Note",
    'note' => $note
]);
