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

    <link rel="icon" href="../img/favicon.ico">

    <title>Haunting Bike</title>

    <link href="../vendors/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/question.js"></script>
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

    <div id="wrapper">
      <h1>What cyclist are you?</h1>
      <p>Reply to find out!</p>

      <form id="quiz">
        <h2>Where do you like to ride more?</h2>

        <label><input type="radio" name="q1" value="c1">
          On dirt roads or in the city, without having to go through particularly demanding trails
        </label><br />
        <label><input type="radio" name="q1" value="c2">
          In high mountains
        </label><br />
        <label><input type="radio" name="q1" value="c3">
          Get off the slopes at crazy speeds
        </label><br />


        <h2>What bike you own?</h2>

        <label><input type="radio" name="q2" value="c1">
          Front
        </label><br />
        <label><input type="radio" name="q2" value="c2">
          Full
        </label><br />
        <label><input type="radio" name="q2" value="c3">
          A very light
        </label><br />


        <h2>What kind of races take part?</h2>
        <label><input type="radio" name="q3" value="c1">
          Marathon
        </label><br />
        <label><input type="radio" name="q3" value="c2">
          No racing, better than the high mountain
        </label><br />
        <label><input type="radio" name="q3" value="c3">
          Hourly races
        </label><br />

        <input type="submit" class="btn-s" value="Find Out" id="btn-result" />
      </form>
    </div>
  </div>

</body>
</html>