<?php

include('DBO.php');
include('Authentication.php');

  $userID = $_SESSION['UNO'];
  $sql = "SELECT * FROM exam e ,enrolls n  WHERE  e.ENO = n.ENO  AND UNO = '$userID';";
  $result = execute($sql);

  sendJSON($result);


?>
