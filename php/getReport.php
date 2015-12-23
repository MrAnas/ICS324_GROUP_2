<?php

include('DBO.php');
include('Authentication.php');

  $examId = $_GET['examId'];
  $userID = $_SESSION['UNO'];

  $sql = "SELECT QNO, QTEXT, response, correctAnswer  FROM question , userResponse  WHERE question.ENO = '$examId' AND question.UNO = '$UNO';";
  $result = execute($sql);

  sendJSON($result);


?>
