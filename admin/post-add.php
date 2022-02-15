<?php
    include("config/config.php");

    $header = $_POST['header'];
    $code = $_POST['code'];
    $tag = $_POST['tag'];
    $cover = $_FILES['cover']['name'];
    $tmp = $_FILES['cover']['tmp_name'];

    if (move_uploaded_file($tmp, "covers/".$cover)) {
      echo "File is valid, and was successfully uploaded.\n";
  } else {
      echo "Possible file upload attack!\n";
      
  }

  $sql = "INSERT INTO posts (header, code, cover, tag_id, created_date, modified_date ) VALUES ('$header', '$code', '$cover', '$tag', now(), now() )";

  mysqli_query($conn, $sql);
  header("location:index.php");

?>