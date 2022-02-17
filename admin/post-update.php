<?php
     include("config/config.php");

     $post_id = $_POST['post_id'];
     $header = $_POST['header'];
     $code = $_POST['code'];
     $tag = $_POST['tag'];
     $cover = $_FILES['cover']['name'];
     $tmp = $_FILES['cover']['tmp_name'];


     if($cover){
          move_uploaded_file($tmp, "covers/".$cover);
          $sql = "UPDATE posts SET header= '$header', code='$code', tag_id='$tag', cover='$cover', modified_date=now() WHERE post_id= $post_id ";
     } else {
          $sql = "UPDATE posts SET header= '$header', code='$code', tag_id='$tag', modified_date=now() WHERE post_id= $post_id ";      
     }

     mysqli_query($conn, $sql);
     echo "update complete";

?>