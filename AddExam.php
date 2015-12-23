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

    <script src='js/addExam.js'></script>
  </head>
  <body>
    <div class="container" style="max-width: 700px;">
      <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="index.php">Admin</a></li>
              <li role="presentation"><a href="#">User</a></li>
            </ul>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <form class="form-horizontal">
                <fieldset>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="exam-name">Exam Name</label>
                  <div class="col-md-4">
                  <input id="exam-name" name="exam-name" type="text" placeholder="" class="form-control input-md" required="">
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="time-allowed">Time Allowed</label>
                  <div class="col-md-4">
                  <input id="time-allowed" name="time-allowed" type="text" placeholder="In Minutes" class="form-control input-md" required="">

                  </div>
                </div>
                </fieldset>
               </form>
          </div>
      </div>
      <div id='questions-container'>

      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="dropdown">
                  <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"  style="width: 100%;">Add a Question
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#" onclick="addQuestion(2)">2</a></li>
                    <li><a href="#" onclick="addQuestion(3)">3</a></li>
                    <li><a href="#" onclick="addQuestion(4)">4</a></li>
                    <li><a href="#" onclick="addQuestion(5)">5</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <button type="button" class="btn btn-primary" style="width: 100%" onclick="addExam()">Save & Exit</button>
          </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
        counter = 1;
        function addQuestion(options)
        {
            questionHTML = '<form class="form-horizontal" id = "question-' + counter + '" >';
            questionHTML += '<fieldset>';
            questionHTML += '<div class="form-group">';
            questionHTML += '<label class="col-md-4 control-label" for="question">Question Text</label>';
            questionHTML += '<div class="col-md-4">';
            questionHTML += '<input id="question-text-'  + counter + '" name="question-text-' + counter + '" type="text" placeholder="Enter question here" class="form-control input-md" required=""> ';
            questionHTML += '<input id="correct-answer-' + counter + '" name="correct-answer-' + counter + '" type="text" placeholder="Enter the Letter of Correct Answer" class="form-control input-md" required=""> ';
            questionHTML += '</div>';
            questionHTML += '</div>';
            for (i = 1; i <= options; i++)
            {
                questionHTML += "<div class=\"form-group\">";
                questionHTML += "  <label class=\"col-md-4 control-label\" for=\"answeroption\">Options<\/label>";
                questionHTML += "  <div class=\"col-md-4\">";
                questionHTML += "    <div class=\"input-group\">";
                questionHTML += "      <span class=\"input-group-addon\">     ";
                questionHTML += "          <input type=\"checkbox\">     ";
                questionHTML += "      <\/span>";
                questionHTML += "      <input id=\"answeroption-" + i + "\" name=\"answeroption\" class=\"form-control\" type=\"text\" placeholder=\"Write Option Here\">";
                questionHTML += "    <\/div>";
                questionHTML += "    ";
                questionHTML += "  <\/div>";
                questionHTML += "<\/div>";

            }
            questionHTML += "<!-- Button -->";
            questionHTML += "<div class=\"form-group\">";
            questionHTML += "  <label class=\"col-md-4 control-label\" for=\"delete-button\"><\/label>";
            questionHTML += "  <div class=\"col-md-4\">";
            questionHTML += "    <button id=\"delete-button-"+counter+"\" name=\"delete-button\" class=\"btn btn-danger\" onclick=\"deleteQuestion(this)\">Delete Question<\/button>";
            questionHTML += "  <\/div>";
            questionHTML += "<\/div>";
            questionHTML += '</fieldset></form>';
            $('#questions-container').append(questionHTML);
            counter++;
        }
        function deleteQuestion(button)
        {
            prep = button.id.split('-');
            questionID = '#' + 'question-' + prep[2];
            $(questionID).remove();
        }

    </script>
    <script src="js/bootbox.min.js"></script>

  </body>
</html>
