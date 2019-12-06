<?php
  session_start();

  if(isset($_SESSION['user_session'])=="")
  {
    header("Location: ../index.php");
  }
?>
<html>
  <head>
    <meta charset="UTF-8" />

    <link rel="icon" href="../img/favicon.ico">

    <title>Haunting Bike</title>

    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/script-info.js"></script>

    <link href="../css/information.css" rel="stylesheet">
  </head>
<body>
<div class="allContainer">
  <div class="container">
    <div class="intro">
        <h1>Enter your information</h1>
        </div>

  <div id="" class="myPlace">
            <form class="" id="register-form">
              <div id="error_info">
                  <!-- error will be shown here ! -->
              </div>
              <div class="form-group">
                Gender: <input type="radio" name="Gender" value="m"> Male
                <input type="radio" name="Gender" value="f"> Female
              </div>
              <div class="form-group">
                Age: <input type="number" min="0" max="130" name="Age" id="age">
              </div>
              <div class="form-group">
                Bike Model: <select name="Bicycle-model" id="bike-model">
                      <option data-name="xc">Cross Country</option>
                      <option data-name="marathon">Marathon</option>
                      <option data-name="trail">Trail</option>
                      <option data-name="all-mountain">All Mountain</option>
                      <option data-name="enduro">Enduro</option>
                      <option data-name="free-ride">Free Ride</option>
                      <option data-name="dh">DownHill</option>
                </select>
              </div>
            </form>
        <input type="button" class="btn-s" value="GO" name="btn-info" id="btn-info" />
      </div>
  </div>
  <div class="spaceBlock"></div>
  </div>
</body>
</html>