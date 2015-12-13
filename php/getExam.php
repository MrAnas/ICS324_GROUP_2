<?php
  include('DBO.php');

  $examId = $_GET['examId'];

  $sql = "SELECT * FROM (question JOIN answeroption ON (question.QNO = answeroption.QNO)) WHERE question.ENO = '$examId' AND answeroption.ENO = '$examId';";

  $result = execute($sql);

  SendJSON($result);

 ?>
