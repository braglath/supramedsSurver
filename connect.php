<?php 

$servername = "localhost";
$user = "root";
$pw = "";
$db = "suprameds";
$table = "users";
// $action = $_REQUEST['action'];



    // Create connection
    $conn = new mysqli($servername, $user, $pw, $db);
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "DB Connected";
    }
?>