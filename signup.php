<?php 
	require_once("connect.php");

	$name = $_POST['name'] ?? "";
	$email = $_POST['email']?? "";
	$phoneNumber = $_POST['phone_number']?? "";
	$password = $_POST['password']?? "";
    

	$query = "SELECT * FROM users WHERE name ='".$name."' AND email = '".$email."' AND phone_number = '".$phoneNumber."' AND password = '".$password."'";
	$res = mysqli_query($conn,$query);
	$data = mysqli_num_rows($res);

	if($data == 1){
		// account exists
		echo json_encode("Error");
	} else {
		//  create account
		$query = "INSERT INTO users(name,email,phone_number,password)VALUES('".$name."','".$email."','".$phoneNumber."','".$password."')";
		$res = mysqli_query($conn,$query);

		if($res){
			echo json_encode("true");
		}else{
			echo json_encode("false");
		}
	}
?>