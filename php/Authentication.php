<?php
	session_start();

	if(!isset($_SESSION["UNO"])){
		$return["ERROR"] = "Unauthorized request";
		die(json_encode($return));
	}

	global $UNO;
	$UNO = $_SESSION["UNO"];
?>
