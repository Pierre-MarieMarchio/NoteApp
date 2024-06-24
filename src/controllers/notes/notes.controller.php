<?php

$headerName = "Notes";


$config = require __DIR__ . '/../../../config.php';
$db = Database::getInstance($config['database']);
$notes = $db->query("select * from notes where user_id = 1")->fetchAllOrFail();



?>

<!-- view -->


<?php require './src/views/notes.view.php'; ?>