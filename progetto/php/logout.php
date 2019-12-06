<?php
session_start();
  unset($_SESSION['user_session']);
  session_destroy();
  $link = "../index.php";
  echo $link;
?>