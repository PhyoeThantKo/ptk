<?php
     include("admin/config/config.php");
     $email = $_POST['email'];
     $sql = "INSERT INTO newsletter (email, created_date) VALUES ('$email', now())";
     mysqli_query($conn, $sql);
     header("location: thanks.php");
?>
