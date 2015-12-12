<?php
	include('DBO.php');

	$connection = connectToDatabase();

	$email =  $_GET["email"]; // $_POST
	$pass =  $_GET["password"];
	$fName = $_GET["fname"];
	$lName = $_GET["lname"];


		$return = signUp($connection,$email ,$fName ,$lName,$pass);

	// 	if(!$return){
	// 	sendErrorJSON("Error");
	// }
	
	echo json_encode($return);
?>
