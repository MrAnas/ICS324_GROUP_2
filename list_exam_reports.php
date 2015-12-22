<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>QuizTaker (User Exams)</title>

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
            <th>My Completed Exams</th>
          </tr>
        </thead>
        <thead>
          <tr>
            <th>Exam name</th>
            <th>Exam Time</th>
            <th>Controllers</th>
          </tr>
        </thead>
        <tbody id="completed_exams_table_body">
          <script></script>
        </tbody>
      </table>
    </div>
    <div class="col-xs-6 col-lg-6 panel panel-default">










    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        getExams();
        function getExams()
        {
          $.get("/php/getCompletedExams.php",
          function( data ) {
            echo data;
            for(i = 0 ; data.length ; i++)
              $('#completed_exams_table_body').append("<tr><td>" + data[i].ETITLE + "</td><td>"+ data[i].TIMEALLOWED + "</td><td><ul class='list-group'><li class='list-group-item'><button id='"+ data[i].ENO + "' class= 'btn btn-info' onclick = 'show_report(this)' >Show Report</button></li></ul></td></tr>")

              displayExam( , data[i].ENO);
          },
           "json"
          );
        }
        function show_report(button){
            var id = $(button).attr('id');
            echo(id);
            sessionStorage.setItem('examId_report', id);           
          window.location.href = "exam_report.html";

        }
       

      });
    </script>
    <script src="js/bootbox.min.js"></script>
    
</body>

</html>
