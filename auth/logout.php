<?php
  session_start();
  session_destroy();
  $pathLogin = "http://" . $_SERVER["HTTP_HOST"] . '/login.php';

  header("Location:".$pathLogin);
  exit;
