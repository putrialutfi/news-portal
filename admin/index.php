<?php
  include '../config.php';
  $dataDB = new dbConfig();

  $_SESSION['status'] = null;
  error_reporting(E_ALL);
  ini_set('display_errors', 0);
  session_start();
  if($_SESSION['status'] == "admin"){
    require_once 'templates/page.php';
    require_once 'templates/default.php';
  }
  else {
    echo "<script>location.replace('/news/admin/login/');</script>";
  }
?>
