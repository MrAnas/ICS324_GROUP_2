<?php

include('DBO.php');
include('Authentication.php');

  $userID = $_SESSION['UNO'];
  $sql = "SELECT ENO, ETITLE , TIMEALLOWED FROM exam e ,enrolls n  WHERE  n.finishTime IS NOT NULL AND UNO = '$userID';";
  $result = execute($sql);

  sendJSON($result);


?>
