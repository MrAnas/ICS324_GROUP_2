<?php
  include('DBO.php');

  $connection = connectToDatabase();

  $title = $_GET["title"];
  $timeAllowed = $_GET["time"];

  $result = addExam($connection ,$title,$timeAllowed);

  echo json_encode($result);

?>
