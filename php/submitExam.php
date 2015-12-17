<?php
include('DBO.php');
include('Authentication.php');

$connection = connectToDatabase();
  // Update the FINISH time for the enrollment.

  $examId = $_GET['examId'];
  $userId = $_SESSION['UNO'];
  $finishTime = date('Y-m-d H:i:s');
  
  $result = submitExam($connection , $examId , $userId , $finishTime);

  echo json_encode($result);


?>
