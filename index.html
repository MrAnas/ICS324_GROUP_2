<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuizTaker</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>
    <div class="container" style="max-width: 700px;">
      <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="index.html">Admin</a></li>
              <li role="presentation"><a href="user.html">User</a></li>

            </ul>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 center-block">
              <h1 class="text-center">List of Created Exams</h1>
          </div>
      </div>
      <div id="exams">

      </div>
      <div class="row">
          <div class="col-md-12">
              <a href="AddExam.html"><button type="button" class="btn btn-success" style="width: 100%">Add an Exam</button></a>
          </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script scr="js/getExamsAdmin.js"></script>
    <script>
      $(document).ready(function(){
        getExams();
        function getExams()
        {
          $.get("/php/getExams.php",
          function( data ) {
            for(i = 0 ; data.length ; i++)
              displayExam(data[i].ETITLE , data[i].ENO);
          },
           "json"
          );
        }
        function displayExam(examName , examENO)
        {
           examHTML = '<div class="exam-item" id = "exam-'+ examENO +'" >';
           examHTML += '<div class = "row">';
           examHTML += '<div class="col-md-8">';
           examHTML += '<h3>'+ examName +'</h3>';
           examHTML += '</div>';
           examHTML += '<div class="col-md-2">';
           examHTML += '<button id = "edit-'+ examENO +'" type="button" class="btn btn-primary" onclick = "editExam(this)">Edit</button>';
           examHTML += '</div>';
           examHTML += '<div class="col-md-2">';
           examHTML += '<button id = "delete-'+ examENO +'" type="button" class="btn btn-danger" onclick = "deleteExam(this)">Delete</button>';
           examHTML += '</div>';
           examHTML += '</div>';
           examHTML += '</div>';

           $('#exams').append(examHTML);
        }
      });

       function deleteExam(button)
       {
            //Call to delete an exam
            var id = $(button).attr('id').split("delete-").join("");
             $.get("/php/deleteExam.php", {examId: id },
             function ( data ) {
               bootbox.confirm("Are you sure?", function(result) {
                  location.reload();
               });

             },
              "json"
             );
       }

       function editExam(button)
       {

            //Calll to edit an exam
       }
    </script>
    <script src="js/bootbox.min.js"></script>

  </body>
</html>
