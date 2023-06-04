<?php
include_once ('./index.php');
global $db;

function deleteById($db, $userId){
    $query = $db->prepare("DELETE FROM users WHERE id = ?");
    $query->bind_param('i', $userId);

    if($query->execute()){
        echo 'Record successfully deleted <br>';
    }
    else{
        echo 'Fatal error: ' . $db->error;
        exit();
    }

    $query->close();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['userId'])){

        $userId = $_POST['userId'];

        deleteById($db, $userId);
    }
}

$db->close();
?>