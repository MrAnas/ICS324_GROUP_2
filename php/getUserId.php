<?php
	session_start();
	$return["UNO"] = "";

	if(isset($_SESSION["UNO"])){
		$return["UNO"] = $_SESSION["UNO"];
	}
	
	echo json_encode($return);
?>
