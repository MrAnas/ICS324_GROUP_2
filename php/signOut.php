<?php
	session_unset(); 
	session_destroy();
	$return = "Signed out successfully";
	echo json_encode($return);
?>