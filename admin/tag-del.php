<?php
     include("config/config.php");
     $tag_id = $_GET['tag_id'];
     $sql = "DELETE FROM tags WHERE tag_id = $tag_id";
     mysqli_query($conn, $sql);

     header("location: tags.php")
?>