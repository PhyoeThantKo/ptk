<?php
     session_start();
     $email = $_POST['email'];
     $password = $_POST['password'];

     if($email=="test@gmail.com" and $password=="test"){
          $_SESSION['auth'] = true;
          header("location: index.php");
     }else{
          header("location: login-form.php");
     }
?>