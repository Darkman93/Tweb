<?php

  function dbConnect()
  {
    $db_host = "localhost";
    $db_name = "project";
    $db_user = "root";
    $db_pass = "";

    try {
      $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
    } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
    }

    return $db_con;
  }

  function dbClose($db){
    $db = null;
  }

?>