<?php

include('DBO.php');

$connection = connectToDatabase();

$examId = $_GET['examId'];
$questionId = $_GET['questionId'];
$questionText = $_GET['questionText'];
$correctAnswer = $_GET['correctAnswer'];

$result = addQuestion($connection ,$examId, $questionId , $questionText , $correctAnswer);


echo json_encode($result);
?>
