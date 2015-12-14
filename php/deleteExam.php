<?php

		include('DBO.php');
		$connection = connectToDatabase();

		$ENO =  $_GET["examId"];

		$return = deleteExam($connection , $ENO);

		echo json_encode($return);
?>
