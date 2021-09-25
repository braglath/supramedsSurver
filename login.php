<?php 
	require_once("connect.php");
    $phone_number = $_POST['phone_number']?? "";

    $sql = "SELECT * FROM users WHERE phone_number = '".$phone_number."'";
    
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    if(mysqli_num_rows($result) > 0){
        echo json_encode("Success");
    }else{
        echo json_encode("Error");
    }
?>