<?php
include_once ('./index.php');
global $db;

function updateUser($db, $userName, $userAge, $userEmail, $userId){
    $query = $db->prepare("UPDATE users SET name = ?, age = ?, email = ? WHERE id = ? ");
    $query->bind_param('sisi', $userName, $userAge, $userEmail, $userId);

    if($query->execute()){
        echo 'Record successfully updated <br>';
    }
    else{
        echo 'Fatal error: ' . $db->error;
        exit();
    }

    $query->close();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['userId'], $_POST['newName'], $_POST['newAge'], $_POST['newEmail'])) {

        $userId = $_POST['userId'];
        $userName = $_POST['newName'];
        $userAge = $_POST['newAge'];
        $userEmail = $_POST['newEmail'];

        updateUser($db, $userName, $userAge, $userEmail, $userId);
    }
}

$db->close();
?>