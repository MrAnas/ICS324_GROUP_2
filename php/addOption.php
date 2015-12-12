<?php

  include('DBO.php');

  $connection = connectToDatabase();
  $examId = $_GET['examId'];
  $questionId = $_GET['questionId'];
  $optionId = $_GET['optionId'];
  $optionText = $_GET['optionText'];

  $result = addOption($connection , $examId ,$questionId , $optionId ,$optionText);

  echo json_encode($result);

?>
