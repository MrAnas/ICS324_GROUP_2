function deleteQuestion(button)
{
    prep = button.id.split('-');
    questionID = '#' + 'question-' + prep[2];
    $(questionID).remove();
}
