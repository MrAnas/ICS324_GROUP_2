<?php

	global $invalidQueryInputError;
	$invalidQueryInputError = "";
	function invalidQueryInput($errno, $errstr) {
		global $invalidQueryInputError;
		$invalidQueryInputError = "Error: [$errno] $errstr";
	}

	//set error handler
	set_error_handler("invalidQueryInput");

	//Function that gets a query and execute it then returns array of rows
	function execute($sql){
		global $invalidQueryInputError;

		$connection = connectToDatabase();
		$result = mysqli_query($connection, $sql);
		closeConnection($connection);

		$rows = array();

		if(mysqli_num_rows($result) > 0)
		{
			$i = 0;
			while($row = mysqli_fetch_assoc($result))
			{
				$rows[$i] = $row;
				$i++;
			}
		}

		if($invalidQueryInputError != ""){
			$rows["PHP_ERROR"] = $invalidQueryInputError; 	//This is not safe [Security Flow]
			$invalidQueryInputError = "";
		}

		if(mysqli_error($connection) != null){
			$rows["SQL_ERROR"] = mysqli_connect_error(); 	//This is not safe [Security Flow]
		}

		return $rows;
	}

	//Function that sends an array of data to the client as JSON
	function sendJSON($data){
		die(json_encode($data));
	}

	//Function that sends an Error message to the client as JSON
	function sendErrorJSON($data){
		$return = array("ERROR" => $data);
		die(json_encode($return));
	}

//---------------------------------------------------------------------
   function connectToDatabase()
    {
        //Create a connection
        $connection = mysqli_connect("localhost", "root","","examiner");
        return $connection;
    }

    //Function that closes the connection to a database.
    function closeConnection($connection)
    {
        mysqli_close($connection);
    }

		// Signup feature, the user should enter all his info as specified to be NOT NULL
		function signUp($connection, $email,  $fname , $lname, $password)
		{
			$query = "INSERT INTO users (EMAIL, FNAME, LNAME,PASSWORD) VALUES('$email', '$fname', '$lname', '$password')";

			$result = mysqli_query($connection, $query);

			// if ($result) {
				if(count($result)  > 1 ){
					return false;
				}

				$id = mysqli_insert_id($connection);
				$query = "SELECT * FROM users WHERE UNO = '$id' ";
				$result = mysqli_query($connection, $query);
				$row = mysqli_fetch_assoc($result);
				return($row);

}
	//}

		//Signin Feature, entering email and password only
		function signIn($connection, $email, $password)
		{
			$query = "SELECT * FROM users WHERE EMAIL = '$email' AND PASSWORD = '$password' ";
				$result = mysqli_query($connection, $query);

			// $checkPassword = $result["PASSWORD"] == $password;

			// if(!$result || $checkPassword)
			// {
			// 	return false;
			// }
			// else
			// {
				//$id = mysql_fetch_object($result);
				//$query = "SELECT * FROM users WHERE UNO = '$id' ";
				//$result = mysqli_query($connection, $query);
				$row = mysqli_fetch_assoc($result);
				return($row);
			//}
		}


		// Adding exam, you need to pass title and time allowed (Time allowed is in)
		function addExam($connection, $title, $timeAllowed)
		{
			$query = "INSERT INTO exam (ETITLE , TIMEALLOWED) VALUES ('$title', '$timeAllowed')";

			$result = mysqli_query($connection, $query);

			if ($result) {
						$id = mysqli_insert_id($connection);
						$query = "SELECT * FROM EXAM WHERE ENO = '$id' ";
						$result = mysqli_query($connection, $query);
						$row = mysqli_fetch_assoc($result);
						return($row);
			}
		 else {
				return("The Exam Was Not Added. Try Again Later.");
			}
		}

		// function getExams($connection)
		// {
		// 	$query = "SELECT ETITLE FROM EXAM";
		//
		//
		// }

		function editExam($connection , $examID , $title , $timeAllowed)
		{
			$query = "UPDATE EXAM SET ETITLE = '$title' TIMEALLOWED = '$timeAllowed' WHERE EID = '$examID' ";
			$result = mysqli_query($connection, $query);

			if ($result) {
						echo "New record has id: " . mysqli_insert_id($connection);
						$query = "SELECT * FROM EXAM WHERE ENO = '$id' ";
						echo 	$result = mysqli_query($connection, $query);
						return($result);
		} else {
				return("The Exam Was Not Edited. Try Again Later.");
			}
		}

		function getExamTime($connection , $examID)
		{
			$query = "SELECT TIMEALLOWED FROM EXAM WHERE EXAM.ENO = '$examID'";
			$result = mysqli_query($connection, $query);

			if ($result) {
				$row = mysqli_fetch_assoc($result);
				return($row);
		} else {
				return("There is no such Exam");
			}
		}


		function editExamTitle($connection , $examID ,$title)
		{
			$query = "UPDATE EXAM SET ETITLE = '$title' WHERE ENO = '$examID' ";
			$result = mysqli_query($connection, $query);

			if ($result) {
				return("The Exam Has Been Edited Successfully!");
			} else {
				return("The Exam Was Not Edited. Try Again Later.");
			}
		}


		function editExamTime($connection , $timeAllowed)
		{
			$query = "UPDATE EXAM SET TIMEALLOWED = '$title' WHERE ENO '$examID' ";
			$result = mysqli_query($connection, $query);

			if ($result) {
				return("The Exam Has Been Edited Successfully!");
			} else {
				return("The Exam Was Not Edited. Please check exam ID");
			}
		}

		function submitExam($connection , $examID , $userID , $finishTime){
			$query = "UPDATE enrolls SET FINISHTIME = '$finishTime' WHERE ENO = '$examID' AND UNO = '$userID' ";
			$result = mysqli_query($connection, $query);

			if ($result) {
				$id = mysqli_insert_id($connection);
				$query = "SELECT * FROM enrolls WHERE ENO = '$examID' AND UNO = '$userID' ";
				$result = mysqli_query($connection, $query);
				$row = mysqli_fetch_assoc($result);
				return($row);
			} else {
				return("The Exam Was Not Edited. Please check exam ID");
			}
		}



		function addQuestion($connection ,$examID, $questionID , $questionText , $correctAnswer)
		{
			$query = "INSERT INTO question (ENO , QNO , QTEXT , CORRECTANSWER ) VALUES ('$examID' , '$questionID' , '$questionText' , '$correctAnswer')";
			$result = mysqli_query($connection , $query);

			if ($result) {
						$id = mysqli_insert_id($connection);
						$query = "SELECT * FROM question WHERE ENO = '$examID' AND QNO = '$questionID' ";
						$result = mysqli_query($connection, $query);
						$row = mysqli_fetch_assoc($result);
						return($row);
			}
		 else {
				return("The Question Was Not Added.");
			}
		}


		function editQuestion($connection , $examID , $questionID , $answerText , $correctAnswer)
		{
			if(!is_null($answerText)){
				$query = "UPDATE question SET QTEXT = '$answerText' WHERE ENO='$examID' AND QNO = '$questionID' ";
				$result = mysqli_query($connection, $query);
			}
			if(!is_null($correctAnswer))
			{
				$query = "UPDATE question SET CORRECTANSWER = '$correctAnswer' WHERE ENO='$examID' AND QNO = '$questionID' ";
				$result = mysqli_query($connection, $query);
			}

			if(count($result)  > 1 ){
				return false;
			}

			$query = "SELECT * FROM question WHERE ENO='$examID' AND QNO = '$questionID' ";
			$result = mysqli_query($connection, $query);
			$row = mysqli_fetch_assoc($result);
			return($row);
		}

		function addOption($connection , $examID , $questionID , $optionID ,$optionText)
		{
			$query = "INSERT INTO answeroption (ENO , QNO , ONO , OPTIONTEXT ) VALUES ('$examID' , '$questionID' , '$optionID' , '$optionText')";
			$result = mysqli_query($connection , $query);

			if ($result) {
						$id = mysqli_insert_id($connection);
						$query = "SELECT * FROM answeroption WHERE ENO = '$examID' AND QNO= '$questionID' AND ONO ='$optionID' ";
						$result = mysqli_query($connection, $query);
						$row = mysqli_fetch_assoc($result);
						return($row);
			}
		 else {
				return("The option Was Not Added.");
			}
		}

		function editOption($connection ,$examID, $questionID , $optionID , $optionText)
		{
				$query = "UPDATE answeroption SET `OPTIONTEXT` ='$optionText' WHERE ENO='$examID' AND QNO = '$questionID' AND ONO ='$optionID' ";
				$result = mysqli_query($connection, $query);


			if($result){
				$query = "SELECT * FROM answeroption WHERE ENO='$examID' AND QNO = '$questionID' AND ONO='$optionID'";
				$result = mysqli_query($connection, $query);
				$row = mysqli_fetch_assoc($result);
				return($row);
			}
		}












		//----------------------- User Response and Result ------------------------------------
		function userResponse($connection , $examID ,$questionID, $userID, $response)
		{
			$query = "INSERT INTO userresponse (ENO , QNO , UNO , RESPONSE ) VALUES ('$examID' , '$questionID' , '$userID' , '$response')";
			$result = mysqli_query($connection , $query);

			if ($result) {
						$query = "SELECT * FROM userresponse WHERE UNO = '$userID' AND QNO = '$questionID' AND ENO = '$examID'";
						$result = mysqli_query($connection, $query);
						$row = mysqli_fetch_assoc($result);
						return($row);
			}
		 else {
				return("The response Was Not Added.");
			}
		}

//-- Fahads' Work
function editUser($connection , $email , $fName, $lName , $password){
		if(!isset($email)){
			return "email is missing";
		}
		if(!isset($password)){
			return "password is missing";
		}
		if(!isset($fName)){
			return "first name is missing";
		}
		if(!isset($lName)){
			return "last name is missing";
		}

		$query = "UPDATE user SET EMAIL = '$email' AND PASSWORD = '$password' AND FNAME = '$fName' AND LNAME = '$lName' WHERE EMAIL '$email' ";
		$result = mysqli_query($connection , $query);
		if($result){
			return "user edieted successfully";
		}else{
			return "user edit failed" . mysqli_error($con);
		}
	}


	function enroll($connection , $UNO , $ENO , $STARTTIME){
		$query = "INSERT INTO ENROLLS (UNO, ENO, STARTTIME) VALUES('$UNO', '$ENO', '$STARTTIME')";
		$result = mysqli_query($connection , $query);
	}
	function updateEnroll($connection , $UNO , $ENO , $FINISHTIME){
		$query = "UPDATE ENROLLS SET FINISHTIME = '$FINISHTIME' WHERE UNO = '$UNO' AND ENO = '$ENO' ";
		$result = mysqli_query($connection , $query);
	}

	function deleteExam($connection , $ENO){
		if(!isset($ENO)){
			return "exam number is missing";
		}
		$query = "DELETE FROM EXAM WHERE ENO = '$ENO'";
		$result = mysqli_query($connection , $query);

		if($result){
			return "Exam deleted succesfully";
		}else{
			return "Exam deleted failed" . mysqli_error($connection);
		}
	}


	function deleteQuestion($connection , $QNO , $ENO){
		if(!isset($ENO)){
			return "exam number is missing";
		}
		if(!isset($QNO)){
			return "question number is missing";
		}
		$query = "DELETE FROM QUESTION WHERE ENO = '$ENO' AND QNO = '$QNO'";
		$result = mysqli_query($connection , $query);

		if($result){
			return "question deleted succesfully";
		}else{
			return "question deleted failed" . mysqli_error($con);
		}
	}

	function deleteOption($connection , $QNO , $ENO, $ONO){
		if(!isset($ENO)){
			return "exam number is missing";
		}
		if(!isset($QNO)){
			return "question number is missing";
		}
		if(!isset($ONO)){
			return "option number is missing";
		}

		$query = "DELETE FROM QUESTION WHERE ENO = '$ENO' AND QNO = '$QNO' and ONO = '$ONO'";
		$result = mysqli_query($connection , $query);

		if($result){
			return "option deleted succesfully";
		}else{
			return "option deleted failed" . mysqli_error($con);
		}
	}
?>
