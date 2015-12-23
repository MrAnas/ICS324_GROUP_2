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
          <li role="presentation"><a href="index.php">Admin</a></li>
          <li role="presentation" class="active"><a href="user.php">User</a></li>

        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a href="#">Exams</a></li>
          <li role="presentation"><a href="edit_profile.php">Profile</a></li>
          <li role="presentation"><a href="list_exam_reports.php">Report</a></li>

        </ul>
      </div>
    </div>
    <div class="col-xs-6 col-lg-6 panel panel-default">

      <!-- Table -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>My Exams</th>
          </tr>
        </thead>
        <thead>
          <tr>
            <th>Exam name</th>
            <th>Srat Time</th>
            <th>End Time</th>
            <th>Controllers</th>
          </tr>
        </thead>
        <tbody id="enroled_table_body">
          <script></script>
        </tbody>
      </table>
    </div>
    <div class="col-xs-6 col-lg-6 panel panel-default">

      <!-- Table -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>All Exams</th>
          </tr>
        </thead>

          <tr>
            <th>Exam name</th>
            <th>Exam Time</th>
            <th>Controllers</th>
          </tr>

        <tbody id="all_exams_table_body">
          <script></script>
        </tbody>
      </table>
    </div>










  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/js.cookie.js"></script>
    <script src="/js/startExam.js"></script>
  <script>
    function enrollInExam(button)
    {
        console.log("I am taking!");
        prep = button.id.split('-');
        enrollID = parseInt(prep[1]);
        userID = Cookies.get('UNO');
        $.get("/php/enrollInExam.php", {ENO: enrollID, UNO: userID},
              function(data)
              {
                    console.log(data);
              }
        , "json");
    }
  $(document).ready(function(){
    getExams();
    getEnrolledExam();

    function getExams()
    {
      $.get("/php/getExams.php",
      function( data ) {
        for(i = 0 ; data.length ; i++)
          displayExam(data[i].ETITLE , data[i].ENO , data[i].TIMEALLOWED);
      },
       "json"
      );
    }

    function hourMinute(a)
    {
      var hours = Math.trunc(a/60);
      var minutes = a % 60;
      return hours+" : " +minutes;
    }

    function displayExam(examName , examENO , examTime)
    {
      var time = hourMinute(examTime);
      $('#all_exams_table_body').append("<tr><td id='exam-name-" + examENO + "'>" + examName + "</td><td>"+ time +"</td><td><ul class='list-group'><li class='list-group-item'><button class= 'btn btn-info' id='enroll-"+ examENO +"' onclick='enrollInExam(this)' >Take</button></li></ul></td></tr>");
    }
      
    function getEnrolledExam()
    {
      $.get("/php/getEnrolledExams.php",
      function( data ) {
        for(i = 0 ; data.length  ; i++)
          displayEnrolledExam(data[i].ETITLE , data[i].ENO , data[i].STARTTIME , data[i].FINISHTIME , data[i].TIMEALLOWED);
      },
       "json"
      );
    }


    function displayEnrolledExam(examName , examNo , examStart , examFinish , examTime)
    {
      $('#enroled_table_body').append("<tr><td>"+ examName +"</td><td>"+ examStart +"</td><td>"+ examFinish +"</td><td><ul class='list-group'><li class='list-group-item'><button class= 'btn btn-success' id='take-"+ examNo +"' onclick='startExam(this)' >Start</button></li></ul></td></tr>")
    }

    });

    function startExam(button)
    {
      var examId = button.id.split("take-").join("");
      $.get("/php/startExam.php", {examId: examId},
      function( data ) {
          console.log(data.ENO)
          start(examId);
      },
       "json"
      );

    }
  </script>
</body>

</html>
