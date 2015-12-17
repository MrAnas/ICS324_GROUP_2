var examId = 129;

$(document).ready(function() {
  var previousQuestion = 1;
  getAllQuestions(examId , 1);
  getExamTime(examId);
});


function getAllQuestions(examId , questionStoppedAt){
  var questionsNubmer;
  $.get("/php/getExam.php",{examId: examId},
  function( data ) {
    questionsNubmer = data.length;
    console.log(questionsNubmer);
    for(i = questionStoppedAt ; i <= questionsNubmer ; i++){
      getQuestion(examId , i);
      // Testing
      console.log("I'm loooooooooping");
    }
    },
 "json"
);
}


  function getQuestion(examId ,questionOrder){
  $.get("/php/getQuestion.php",{examId: examId , questionId: questionOrder},
  function( data ) {
    var options = [];
      for(i = 0 ; i < data.length ; i++)
      {
        options.push(data[i].OPTIONTEXT);
      }
      // Testing
      console.log("" + questionOrder);
      addSolvableQuestion(data[0].QNO , data[0].QTEXT , options);
    },
 "json"
);
}


  function getExamTime(examId)
  {
    var examTime;
    $.get("/php/getExamTime.php",{examId: examId},
    function( data ) {
      examTime = data.TIMEALLOWED;

      startTimer(examTime);
      },
   "json"
  );
  }

// User Post his answer
function postAnswer(examId , questionOrder, userResponse){
  $.get("/php/postResponse.php",{examId: examId , questionId: questionOrder, userResponse: userResponse},
  function( data ) {
    // Here you can add if you want to enhance the method.
  },
 "json"
);
}

function startTimer(examTime){
        var examTimeInMinutes = examTime;
        var count = examTimeInMinutes * 60;
        var counter = setInterval(timer, 1000);

    function timer()
    {
        count = count - 1;
        if (count == -1) {
            clearInterval(counter);
            //Exam Time is Done!
            return;
        }
        var seconds = count % 60;
        var minutes = Math.floor(count / 60);
        var hours = Math.floor(minutes / 60);
        minutes %= 60;
        hours %= 60;
        $('#hours').html('H:');
        $('#hours').append(hours);
        $('#minutes').html('M:');
        $('#minutes').append(minutes);
        $('#seconds').html('S:');
        $('#seconds').append(seconds);
    }
}

isFirstAdded = true;

function addSolvableQuestion(id, question, options)
{
    console.log("WHY I'm not here");
    var questionHTML="";
    if(isFirstAdded)
    {
        questionHTML += "<form class=\"form-horizontal\" id=\"question-"+id+"\">";
        isFirstAdded = false
    }
    else
    {
        questionHTML += "<form class=\"form-horizontal\" id=\"question-"+id+"\" style = 'display: none'>";
    }
    questionHTML += "<fieldset>";
    questionHTML += "<div class=\"form-group\">";
    questionHTML += "  <label class=\"col-md-4 control-label\" for=\"radios\">"+question+"<\/label>";
    questionHTML += '<div class="col-md-4" id="answer-from">';

    for (i = 0; i < options.length; i++)
    {
          questionHTML += '<div class="radio">';
          questionHTML += '<label for="option-'+i+'">';
          questionHTML += '<input type="radio" name="radios" id="option-'+i+'" value="option-'+i+' onclick="submitAnswer(this)" >';
          questionHTML += options[i];
          questionHTML += '</label>';
          questionHTML += '</div>';
    }

    questionHTML += "  <\/div>";
    questionHTML += "<\/div>";
    questionHTML += "";
    questionHTML += '<button id = "next-button-'+id+'" type="button" onclick = "submitAnswer(this)" class="btn btn-primary" style="width: 100%">Save & Next Question</button>';
    questionHTML += '<button id = "end-button-'+id+'" type="button" onclick = "submitExam(this)" class="btn btn-success" style="width: 100%">Save & Exit</button>';
    questionHTML += "<\/fieldset>";
    questionHTML += "<\/form>";

    $('#solvable-questions').append(questionHTML);
}



// As mentioned in Reqs document, once submitted no resubmission for that question.
function submitAnswer(button)
{
  responseChoice = $('#answer-from input[type="radio"]:checked').attr('id').split('option-').join("");
  responseLetter = convertResponse(responseChoice);
  responseQuestion = button.id.split("next-button-").join("");

  //Post the answer to the database.
  postAnswer(examId , responseQuestion , responseLetter);
  nextQuestion(responseQuestion);
}

//Get the next Question or the question where the user stopped at
function nextQuestion(responseQuestion)
{
    //prep = button.id.split('-');
    prep = responseQuestion;
    questionID = '#' + 'question-' + prep;
    $(questionID).css('display','none');
    prepNextID = parseInt(prep)+1;
    nextQuestionID = '#' + 'question-' + prepNextID;
    $(nextQuestionID).css('display', 'block');
}



function submitExam(button)
{
    //Code to submit and save the user progress

}

function convertResponse(number)
{
  switch (number) {
    case "0": return 'A';break;
    case "1": return 'B';break;
    case "2": return 'C';break;
    case "3": return 'D';break;
    case "4": return 'E';break;

    default: return null;
  }
}
