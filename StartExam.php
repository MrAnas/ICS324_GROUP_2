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
              <li role="presentation"><a href="#">User</a></li>
            </ul>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
                <h2>Time Left: </h2>
          </div>
          <div class="col-md-2">
                <h2 id = "hours"></h2>
          </div>
          <div class="col-md-2">
                <h2 id = "minutes"></h2>
          </div>
          <div class="col-md-2">
                <h2 id = "seconds"></h2>
          </div>
      </div>
      <div class="row" id = "solvable-questions">

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/bootbox.min.js"></script>
    <script src="/js/startExam.js"></script>
    <script src="/js/takeExam.js"></script>


  </body>
</html>
