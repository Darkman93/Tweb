<?php
  session_start();
  require_once 'db-config.php';

  if(isset($_POST)){

    $user_name    = trim($_POST['name']);
    $user_surname = trim($_POST['surname']);
    $user_mail    = trim($_POST['email']);
    $user_pwd     = trim($_POST['pwd']);

    $regex_name     = '/^([A-Za-zéàë]{2,40} ?)+$/';
    $regex_surname  = '/^([A-Za-zéàë]{2,40} ?)+$/';
    $regex_email    = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/';
    $regex_pwd      = '/^([A-Za-zéàë]{8,} ?)+$/';

    if (!preg_match($regex_name, $user_name) || empty($user_name) || $user_name === '' || !preg_match($regex_surname, $user_surname) || empty($user_surname) || $user_surname === '' || !preg_match($regex_email, $user_mail) || empty($user_mail) || $user_mail === '' || !preg_match($regex_pwd, $user_pwd) || empty($user_pwd) || $user_pwd === '') {

      echo "Value not correct";
  }
  else{
    $password       = md5($user_pwd);

    try{

      $db = dbConnect();

      $query = "INSERT INTO users (name, surname, email, password) VALUES ('$user_name', '$user_surname', '$user_mail', '$password')";

      $count = $db->query($query);
      $stmt = $db->prepare($query);
      $stmt->execute();

      if($count){
        echo "ok";
        $_SESSION['user_session']=$user_mail;
      }

      else{
        echo "Something wrong";
      }

      dbClose($db);
    }

    catch(PDOException $e){
      echo $e->getMessage();
    }
  }
}
?>