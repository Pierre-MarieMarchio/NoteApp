<?php

use Core\App;
use Core\Database;


$db = App::container()->getContainer(Database::class);
$notesService;

$notes = $db->query("select * from notes where user_id = 1")->fetchAllOrFail();


view('notes/index.view.php', [
    'headerName' => 'Notes',
    'notes' => $notes
]);

