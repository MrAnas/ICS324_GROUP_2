$(document).ready(function() {

  var previousQuestion = 1;
  var examId = 129;

  getQuestion(examId , 1);
  getExamTime(examId);

  function getQuestion(examId ,questionOrder){
  $.get("/php/getExam.php",{examId: examId , questionId: questionOrder},
  function( data ) {
    var options = [];
      for(i = 0 ; i < data.length ; i++)
      {
        options.push(data[i].OPTIONTEXT);
      }
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
      console.log("INSIDE GET:" + examTime);
      startTimer(examTime);
      },
   "json"
  );
  }


//////////////// User Post his answer
  function postAnswer(examId , questionOrder, userResponse){
    $.get("/php/postResponse.php",{examId: examId , questionId: questionOrder, userResponse: userResponse},
    function( data ) {
      // Here you can add if you want to enhance the method.
    },
   "json"
  );
  }
///////

});

    function startTimer(examTime){
        var examTimeInMinutes = examTime;
        var count = examTimeInMinutes * 60;
        console.log(examTimeInMinutes);
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
    questionHTML += '<div class="col-md-4">';

    for (i = 0; i < options.length; i++)
    {
          questionHTML += '<div class="radio">';
          questionHTML += '<label for="option-'+i+'">';
          questionHTML += '<input type="radio" name="radios" id="option-'+i+'" value="option-'+i+'">';
          questionHTML += options[i];
          questionHTML += '</label>';
          questionHTML += '</div>';
    }

    questionHTML += "  <\/div>";
    questionHTML += "<\/div>";
    questionHTML += "";
    questionHTML += '<button id = "next-button-'+id+'" type="button" onclick = "nextQuestion(this)" class="btn btn-primary" style="width: 100%">Save & Next Question</button>';
    questionHTML += '<button id = "end-button-'+id+'" type="button" onclick = "submitExam(this)" class="btn btn-success" style="width: 100%">Save & Exit</button>';
    questionHTML += "<\/fieldset>";
    questionHTML += "<\/form>";

    $('#solvable-questions').append(questionHTML);
}

function nextQuestion(button)
{
    prep = button.id.split('-');
    questionID = '#' + 'question-' + prep[2];
    $(questionID).css('display','none');
    prepNextID = parseInt(prep[2]) + 1;
    nextQuestionID = '#' + 'question-' + prepNextID;
    $(nextQuestionID).css('display', 'block');
}

function submitExam(button)
{
    //Code to submit and save the user progress

  }
