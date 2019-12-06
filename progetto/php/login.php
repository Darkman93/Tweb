<?php
  session_start();
  require_once 'db-config.php';


  if(isset($_POST))
  {
    $user_email = trim($_POST['email']);
    $user_pwd = trim($_POST['pwd']);

    $regex_email    = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/';
    $regex_pwd      = '/^([A-Za-zéàë]{8,} ?)+$/';


    if (!preg_match($regex_email, $user_email) || empty($user_email) || $user_email === '' || !preg_match($regex_pwd, $user_pwd) || empty($user_pwd) || $user_pwd === ''){

      echo "Value not correct";
    }

    else{
      $password = md5($user_pwd);

      try{
        $db = dbConnect();

        $query = "SELECT * FROM users WHERE email = '$user_email' AND password = '$password'";
        $count = $db->query($query);
        $stmt = $db->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        dbClose($db);

        if($count->rowCount()!=0){
          if($row['password'] == $password){
            echo "ok";
            $_SESSION['user_session']=$row['email'];
          }
          else{
            echo "wrong password";
          }
        }
        else{
          echo "email or password does not exist"; //wrong  credentials
        }

        dbClose($db);
      }

      catch(PDOException $e){
          echo $e->getMessage();
      }
    }
  }
?>