function addExam()
{

    var counter = 1;
    if($('#exam-name').val() != '' && $('#time-allowed').val() != ''){
        $.get("/php/addExam.php", { title: $("#exam-name").val() , time:$("#time-allowed").val() }, function( data ) {
        addQuestions(data.ENO);
      }, "json"
      );
      }

    //addQuestions(ENO);
}

function addQuestions(ENO)
{
  alert(ENO);
  for(i = 1 ; $("#question-" + i).length != 0 ; i++)
  {
      if($("#question-text-" + i).val() != '')
      {
        alert(i);
        $.get("/php/addQuestion.php", { examId: ENO , questionId: i , questionText: $("#question-text-" + i).val() , correctAnswer: $("#correct-answer-" + i).val() }
        , function( data ) {
          addOptions(data.ENO , data.QNO);
      }, "json"
      );
    }
  }
}



function addOptions(ENO,QNO)
{
  var ONO;
  for(i = 1 ; $("#answeroption-" + i).length != 0 ; i++)
  {
    if($("#answeroption-" + i).val() != '')
    {
      $.get("/php/addOption.php" , { examId: ENO , questionId: QNO , optionId: i , optionText: $("#answeroption-" + i).val() }
      , function (data){
        ONO = data.ONO;
      }, "json"
    );
    }
  }
}
