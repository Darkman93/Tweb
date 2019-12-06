<?php
  session_start();

  if(isset($_SESSION['user_session'])=="")
  {
    header("Location: ../index.php");
  }
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../img/favicon.ico">

    <title>Haunting Bike</title>

    <link href="../vendors/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/script-user.js"></script>

    <link href="../css/starter_template.css" rel="stylesheet">

  </head>

  <body>
    <div class="allContainer">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="./user.php" id="name"></a></li>
              <li><a href="./slideshow.php">SlideShow</a></li>
              <li><a href="./question.php">Questionnaire</a></li>
              <li><a href="./search.php">Search</a></li>
              <li><input type="submit" class="btn-s" value="Logout" name="btn-logout" id="btn-logout" /></li>
            </ul>
          </div>
        </nav>


          <div id="" class="myPlace">
            <form class="" id="register-form">
             <div class="myCircle"> Welcome Back! </div>
              <div id="error_register">
                  <!-- error will be shown here ! -->
              </div>
              <div class="form-group">
                <div id="surname" class="myInputText"></div>
              </div>
              <div class="form-group">
                <div id="bike" class="myInputText"></div>
              </div>
            </form>
          </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
  </body>
</html>
