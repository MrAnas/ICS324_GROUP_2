<?php

include('DBO.php');
include('Authentication.php');

$connection = connectToDatabase();
  // Update the START time for the enrollment.

  $examId = $_GET['examId'];
  $userId = $_SESSION['UNO'];
  $startTime = date('Y-m-d H:i:s');

$result = startExam($connection , $userId , $examId , $startTime);

echo json_encode($result);

 ?>
