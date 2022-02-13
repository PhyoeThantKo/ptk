<?php
     include("config/config.php");
     $name = $_POST['name'];
     $about = $_POST['about'];
     $sql = " INSERT INTO tags ( tag_name, about_tag, created_date, modified_date ) VALUES ( '$name', '$about', now(), now() )";
     mysqli_query( $conn, $sql);
     header("location:tags.php");
?>