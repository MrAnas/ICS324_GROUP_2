<?php

include('DBO.php');
include('Authentication.php');

  $userID = $_SESSION['UNO'];
  $sql = "SELECT * FROM enrolls WHERE UNO = '$userID';";
  $result = execute($sql);

  sendJSON($result);


?>
