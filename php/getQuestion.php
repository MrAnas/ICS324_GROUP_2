<?php
  include('DBO.php');

  $examId = $_GET['examId'];
  $questionId = $_GET['questionId'];

  $sql = "SELECT * FROM (question JOIN answeroption ON (question.QNO = answeroption.QNO)) WHERE question.ENO = '$examId' AND answeroption.ENO = '$examId' AND question.QNO = '$questionId';";

  $result = execute($sql);

  echo json_encode($result);

 ?>
