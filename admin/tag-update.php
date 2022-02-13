<?php
     include("config/config.php");

     $id = $_POST['id'];
     $name = $_POST['name'];
     $about = $_POST['about'];
     $sql = "UPDATE tags SET tag_name = '$name', about_tag = '$about', modified_date=now() WHERE tag_id = $id";
     mysqli_query($conn, $sql);

     header("location: tags.php")

?>