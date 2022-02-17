<?php
     include("config/config.php");

     $post_id = $_GET['post_id'];
     $sql = "DELETE FROM posts WHERE post_id= $post_id";

     mysqli_query($conn, $sql);
     header("location: index.php");
?>