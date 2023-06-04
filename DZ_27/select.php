<?php
include_once ('./index.php');
global $db;

function selectUserById($db, $userId){
    $query = $db->prepare("SELECT * FROM users WHERE id = ?");
    $query->bind_param('i', $userId);

    if($query->execute()){
        $selectResult = $query->get_result();
        echo '<pre>';
        print_r($selectResult->fetch_assoc());
        echo '</pre>';
    }
    else{
        echo 'Fatal error: ' . $db->error;
        exit();
    }

    $query->close();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['userId'])){

        $userId = $_POST['userId'];

        selectUserById($db, $userId);
    }
}

$db->close();
?>