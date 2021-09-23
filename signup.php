<?php 
require_once("connect.php");

$name = $_POST[("name")];
$email = $_POST[("email")];
$phoneNumber = $_POST[("phone_number")];
$password = $_POST[("password")];

$query = "SELECT * FROM users WHERE email LIKE '$email'";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

if($data[0] > 1){
    // account exists
    echo json_encode("account alreasy exists");
} else {
    //  create account
    $query = "INSERT INTO users (id,name,email,phone_number,password) VALUES (null,'$name','$email,'$phoneNumber','$password')";
    $res = mysqli_query($con,$query);

    if($res){
        echo json_encode("true");
    }else{
        echo json_encode("false");
    }
}
?>