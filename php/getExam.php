<?php
  include('DBO.php');

  $examId = $_GET['examId'];

  $sql = "SELECT * FROM question  WHERE question.ENO = '$examId';";

  $result = execute($sql);

  echo json_encode($result);

 ?>
