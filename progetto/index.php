<?php
  session_start();

  if(isset($_SESSION['user_session'])!="")
  {
    header("Location: user/user.php");
  }
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./img/favicon.ico">

    <title>Haunting Bike</title>

    <script src="./vendors/bootstrap-3.3.7/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="./vendors/bootstrap-3.3.7/css/bootstrap.css">
    <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>

    <link href="./css/main.css" rel="stylesheet">

  </head>

  <body>
<div class="allContainer">

    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Haunting Bike</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" id="login-form">
            <div class="form-group">
              <input type="text" name="user_email" id="email" placeholder="Email" class=" form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" placeholder="Password" class="form-control">
            </div>
            <input type="button" class="btn-success" value="Sign In" name="btn-login" id="btn-login" />
            <div id="error_login">
                  <!-- error will be shown here ! -->
              </div>
          </form>
        </div>
      </div>
    </nav>


      <div class="intro">
        <h1>Welcome Bikers!</h1>
        <p>This is a site for those who love mountain biking. Register to join our community of fans!</p>
        </div>

      <div class="row">

        <div id="" class="myPlace">
            <form class="" id="register-form">
             <div class="myCircle"> Register! </div>
              <div id="error_register">
                  <!-- error will be shown here ! -->
              </div>
              <div class="form-group">
                <input type="text" name="dname" id="name" placeholder="Name" class=" myInputText">
              </div>
              <div class="form-group">
                <input type="text" name="dsurname" id="surname" placeholder="Surname" class="myInputText">
              </div>
              <div class="form-group">
                <input type="text" name="demail" id="email_reg" placeholder="Email" class="myInputText">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password_reg" placeholder="Password" class="myInputText">
              </div>
              <div class="form-group">
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" class="myInputText">
              </div>
              <input type="button" class="btn-success" value="Register" name="btn-register" id="btn-register" />
            </form>
          </div>
        </div>
        <div class="spaceBlock"></div>
      </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
