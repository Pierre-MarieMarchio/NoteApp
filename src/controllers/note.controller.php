<?php 

$config = require __DIR__ . '/../../config.php';
$db = Database::getInstance($config['database']);

$headerName = "Note";
$currentUserId = 1;


$note = $db->query( "select * from notes where id = :id", ['id' => $_GET['id']]) -> fetchOrFail(); 



authorize($note['user_ID'] === $currentUserId)

?>


<!-- view -->


<?php require './src/views/Note.view.php'; ?>