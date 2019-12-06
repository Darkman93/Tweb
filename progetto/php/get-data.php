<?php
  header('Content-Type: application/json');
  session_start();
  require_once 'db-config.php';

if(isset($_POST)){
  $key = $_SESSION['user_session'];

  try{
    $db = dbConnect();

    $query = "SELECT users.name, users.surname, info.gender, info.age, info.bike
              FROM info
              INNER JOIN users ON
              info.email=users.email
              WHERE info.email = '$key'";

    $count = $db->query($query);
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result_array = $stmt->fetch(PDO::FETCH_ASSOC);

    dbClose($db);

    echo json_encode($result_array);
  }

  catch(PDOException $e){
      echo $e->getMessage();
  }
}
?>