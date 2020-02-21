<?php
   include('config.php');
   session_start();
   
   $username = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select email from users where email = '$username' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>