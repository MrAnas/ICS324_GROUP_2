<?php

		include('DBO.php');
        include('Authentication.php');
		$connection = connectToDatabase();

		$ENO =  $_GET["enrollID"];

		$return = enroll($connection , $UNO, $ENO);

		echo json_encode($return);
		
?>