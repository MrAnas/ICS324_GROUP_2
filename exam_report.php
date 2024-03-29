<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>QuizTaker (Exam Report)</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script>
  </script>
</head>

<body>
  <div class="container" style="max-width: 700px;">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs">
          <li role="presentation"><a href="index.html">Admin</a></li>
          <li role="presentation" class="active"><a href="user.html">User</a></li>

        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs">
          <li role="presentation"><a href="user.html">Exams</a></li>
          <li role="presentation"><a href="edit_profile.html">Profile</a></li>
          <li role="presentation" class="active"><a href="list_exam_reports.html">Report</a></li>

        </ul>
      </div>
    </div>


    <div class="col-xs-12 col-lg-12 panel panel-default">

      <!-- Table -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Exam Name </th>
          </tr>
        </thead>
        <tr>
          <th>Question</th>
          <th>Correct Answer</th>
          <th>User Answer</th>
        </tr>
        <tbody id="question_report">

        </tbody>
      </table>
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">      number of questions answered correctly</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>

      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">total number of questions</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>

      , percentage correct, and a detailed listing of user responses and correct answers
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        var id = sessionStorage.getItem('examId_report')
          $.get("/php/getReport.php", { examId: id},
            function ( data ) {
              if(data == null){
                echo "Error getting report"
              }
              else {
                echo "Got result"  
              }
            },
             "json");
        
        add_question_report("question text", "correct_answer", "user_response");

        function add_question_report(question_text, correct_answer, user_response) {
          var question = "";
          question += " <tr>";
          question += "            <td>question <\/td>";
          question += "            <td>Correct Answer<\/td>";
          question += "            <td>user response<\/td>";
          question += " <\/tr>";
          $("#question_report").append(question);
        }
      });
    </script>
    <script src="js/bootbox.min.js"></script>
    
</body>

</html>
