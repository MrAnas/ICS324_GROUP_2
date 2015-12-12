        counter = 1;
        function addQuestion(options)
        {
            questionHTML = '<form class="form-horizontal" id = "question-' + counter + '" >';
            questionHTML += '<fieldset>';
            questionHTML += '<div class="form-group">';
            questionHTML += '<label class="col-md-4 control-label" for="question">Question Text</label>';
            questionHTML += '<div class="col-md-4">';
            questionHTML += '<input id="question" name="question" type="text" placeholder="Enter question here" class="form-control input-md" required=""> ';
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
                questionHTML += "      <input id=\"answeroption\" name=\"answeroption\" class=\"form-control\" type=\"text\" placeholder=\"Write Option Here\">";
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
