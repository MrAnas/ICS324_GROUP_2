<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Login</title>

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
          <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <div class="panel panel-info" >
                      <div class="panel-heading">
                          <div class="panel-title">Sign In</div>
                      </div>

                      <div style="padding-top:30px" class="panel-body" >

                          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                          <form id="loginform" class="form-horizontal" role="form">

                              <div style="margin-bottom: 25px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                          <input id="login-email" type="text" class="form-control" name="email" value="" placeholder="email">
                                      </div>

                              <div style="margin-bottom: 25px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                      </div>



                              <div class="input-group">
                                        <div class="checkbox">
                                          <label>
                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                          </label>
                                        </div>
                                      </div>


                                  <div style="margin-top:10px" class="form-group">
                                      <!-- Button -->

                                      <div class="col-sm-12 controls">
                                        <!-- HERE use the PHP link for the login -->
                                        <a id="btn-login" href="#" class="btn btn-success" onclick="signIn()">Login  </a>

                                      </div>
                                  </div>


                                  <div class="form-group">
                                      <div class="col-md-12 control">
                                          <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                              Don't have an account!
                                          <a href="signup.php">
                                              Sign Up Here
                                          </a>
                                          </div>
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
       <script src="js/js.cookie.js"></script>
       <script>

       function signIn(){
            $.get("/php/signIn.php", { email: $("#login-email").val() , password: $("#login-password").val() },
            function ( data ) {
              if(data == null){
                bootbox.confirm("wrong Entery", function(result) {
                  location.reload();
              });
              } else {
              bootbox.confirm("Welcome to our site", function(result) {
                 console.log(data);
                 window.open("/user.php");
               }
             );}
            },
             "json");
            // .fail(function() {
            //   bootbox.("Please check your entry", function(result) {
            //     Example.show("Confirm result: "+result);
            //      location.reload();
            //   });
            // });
          }
       </script>
       <script src="js/bootbox.min.js"></script>
</html>
