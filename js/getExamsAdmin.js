// function getExams()
// {
//   alert("Hi");
//   $.get("/php/getExams.php",
//   function( data ) {
//     for(var i = 1 ; data.length ; i++)
//       displayExam(data[i].ETITLE , i);
//   },
//    "json"
//   );
// }

// function displayExam(examName , id)
// {
//    examHTML = '<div class="exam-item" id = "exam-"'+id+' >';
//    examHTML += '<div class = "row">';
//    examHTML += '<div class="col-md-8">';
//    examHTML += '<h3>'+ examName +'</h3>';
//    examHTML += '</div>';
//    examHTML += '<div class="col-md-2">';
//    examHTML += '<button id = "edit-'+id+'" type="button" class="btn btn-primary" onclick = "editExam(this)">Edit</button>';
//    examHTML += '</div>';
//    examHTML += '<div class="col-md-2">';
//    examHTML += '<button id = "delete-'+id+'" type="button" class="btn btn-danger" onclick = "deleteExam(this)">Delete</button>';
//    examHTML += '</div>';
//    examHTML += '</div>';
//    examHTML += '</div>';

//    $('#exams').append(examHTML);
// }
