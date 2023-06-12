<?php
include_once "./dbConnection.php";
include_once "./User.php";

$db = new Database();
$db = $db->connect();

$user1 = new User('Ninja', $db);
$user1->create();
echo $user1->read();
$user1->updateName(2, 'Reader');
$user1->deleteById(4);
?>