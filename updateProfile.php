<?php
  include('DBO.php');
  include('Authentication.php');
  $connection = connectToDatabase();

  $userID = $_SESSION['UNO'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $password = $_GET['password'];

  $result = updateProfile($connection, $userID, $fname, $lname, $password);

  echo json_encode($result);
 ?>
