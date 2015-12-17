<?php
include('DBO.php');
$connection = connectToDatabase();

$examId = $_GET['examId'];
$questionId = $_GET['questionId'];
$userId = $_SESSION['UNO'];
$respnose = $_GET['userResponse'];

$result = userResponse($conneciton , $examID ,$questionID, $userID, $respnose);

echo json_encode($result);

?>
