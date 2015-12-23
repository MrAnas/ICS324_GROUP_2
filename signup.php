<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Sign Up</title>

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
    <div class="container">
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.html">Sign In</a></div>
                        </div>
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">

                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>



                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input  id="signup-email" type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input id="signup-fname" type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input  id="signup-lname" type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input id="signup-password" type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info" onclick="signUp()"> &nbsp Sign Up</button>
                                    </div>
                                </div>

                            </form>
                         </div>
                    </div>




         </div>
    </div>
     </body>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
     <script src="js/bootbox.min.js"></script>
     <script>

     function signUp(){
          $.get("http://10.13.22.221/php/signUp.php", { email: $("#signup-email").val() , password: $("#signup-password").val() , fname:$("#signup-fname").val() , lname:$("#signup-lname").val() },
          function ( data ) {
            if(data == null){
              bootbox.confirm("wrong Entery", function(result) {
                location.reload();
            });
            } else {
            bootbox.confirm("Welcome to our site", function(result) {
               window.open("/user.html");
             }
           );}
          },
           "json");
        }
     </script>
     <script src="js/bootbox.min.js"></script>
 </html>
