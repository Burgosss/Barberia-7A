<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php'?>
<link rel="stylesheet" href="../Static/css/app.css">
<?php 
  session_start();
  session_destroy();
  header("Location:./loginUser.php");
?>         
