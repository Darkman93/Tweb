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
    <script type="text/javascript" src="../js/script-search.js"></script>
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

      <div class="search">
        <form class="form-search" id="search-form">
          <input type="text" name="Name" placeholder="Name" id="enter_name">
          <input type="text" name="Surname" placeholder="Surname" id="surname">

          <input type="button" class="btn-success" value="Search" name="btn-search" id="btn-search" />
        </form>
      </div>

      <div id="" class="myPlace">
            <form class="" id="register-form">
              <div id="error_src">
                  <!-- error will be shown here ! -->
              </div>
              <div class="form-group">
                <div id="sname" class="myInputText" hidden></div>
              </div>
              <div class="form-group">
                <div id="ssurname" class="myInputText" hidden></div>
              </div>
              <div class="form-group">
                <div id="sgender" class="myInputText" hidden></div>
              </div>
              <div class="form-group">
                <div id="sage" class="myInputText" hidden></div>
              </div>
              <div class="form-group">
                <div id="sbike" class="myInputText" hidden></div>
              </div>
            </form>
          </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
  </body>
</html>
