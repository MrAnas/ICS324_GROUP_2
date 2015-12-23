<?php

		include('DBO.php');
		$connection = connectToDatabase();

		$ENO =  $_GET["ENO"];
        $UNO =  $_GET["UNO"];

		$return = enroll($connection , $UNO, $ENO);

		echo json_encode($return);
		
?>