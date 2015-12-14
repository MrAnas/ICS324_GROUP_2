<?php
	include('DBO.php');

	$connection = connectToDatabase();

	$email = $_GET["email"];
	$pass =  $_GET["password"];




	$return = signIn($connection, $email ,$pass);

	session_start();
		$_SESSION["UNO"] = $return["UNO"];

	echo json_encode($return);



?>
