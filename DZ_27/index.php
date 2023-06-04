
<?php
//include_once ('./db_operations/insert.php');
//include_once ('./db_operations/select.php');
//include_once ('./db_operations/update.php');
//include_once ('./db_operations/delete.php');

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "dz_27";


$db = new mysqli($serverName, $userName, $password, $dbName);

if($db->connect_errno) {
    echo 'Failed to connect' . $db->connect_errno;
    exit();
}
else{
    echo 'Connected <br>';
}






?>