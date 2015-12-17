<?php
include('DBO.php');
include('Authentication.php');

$connection = connectToDatabase();

$examId = $_GET['examId'];
$questionId = $_GET['questionId'];
$userId = $_SESSION['UNO'];
$response = $_GET['userResponse'];

$result = userResponse($connection , $examId ,$questionId, $userId, $response);

echo json_encode($result);

?>
