<?php
  include('DBO.php');
  $connection = connectToDatabase();

  $examId = $_GET['examId'];


$result = getExamTime($connection , $examId);

  echo json_encode($result);
?>
