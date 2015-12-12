<?php

include('DBO.php');

  $userID = $_GET['userId'];
  $sql = "SELECT * FROM enrolls WHERE UNO = '$userID';";
  $result = execute($sql);

  sendJSON($result);


?>
