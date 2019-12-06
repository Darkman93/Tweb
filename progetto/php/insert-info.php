<?php
  session_start();
  require_once 'db-config.php';

  if(isset($_POST)){

    $key         = $_SESSION['user_session'];
    $user_gender = trim($_POST['gender']);
    $user_age    = trim($_POST['age']);
    $user_bike   = trim($_POST['bike']);


    $ageNumericVal = +$user_age;
    if ($ageNumericVal < 0 || $ageNumericVal > 170){
      echo "Wrong age";
    }

    else{

      try{

      $db = dbConnect();

      $query = "INSERT INTO info (email, gender, age, bike) VALUES ('$key', '$user_gender', '$user_age', '$user_bike')";

      $count = $db->query($query);
      $stmt = $db->prepare($query);
      $stmt->execute();

      if($count){
        echo "ok";
      }

      else{
        echo "something wrong";
      }

      dbClose($db);
      }

      catch(PDOException $e){
        echo $e->getMessage();
      }
    }
  }
?>