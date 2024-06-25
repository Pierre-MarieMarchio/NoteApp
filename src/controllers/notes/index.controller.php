<?php

use Core\Database;



$config = require __DIR__ . '/../../config.php';
$db = Database::getInstance($config['database']);

$notes = $db->query("select * from notes where user_id = 1")->fetchAllOrFail();



view('notes/index.view.php', [
    'headerName' => 'Notes',
    'notes' => $notes
]);
