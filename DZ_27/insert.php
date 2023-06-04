<?php
include_once ('./index.php');
global $db;

function insertUser($db, $userName, $userAge, $userEmail) {
    $query = $db->prepare("INSERT INTO users(name, age, email) VALUES (?, ?, ?)");
    $query->bind_param('sis', $userName, $userAge, $userEmail);

    if($query->execute()){
        echo 'Record successfully created <br>';
    }
    else{
        echo 'Fatal error: ' . $db->error;
        exit();
    }

    $query->close();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['name'], $_POST['age'], $_POST['email'])) {

        $userName = $_POST['name'];
        $userAge = $_POST['age'];
        $userEmail = $_POST['email'];

        insertUser($db, $userName, $userAge, $userEmail);
    }
}

$db->close();
?>