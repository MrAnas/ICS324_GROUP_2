<?php
	include('DBO.php');

	$connection = connectToDatabase();

	$email = $_GET["email"];
	$pass =  $_GET["password"];




	$return = signIn($connection, $email ,$pass);

	echo json_encode($return);



?>
