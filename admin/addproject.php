<?php
    include("config/config.php");

    $header = $_POST['header'];
    $description = $_POST['description'];
    $tag = $_POST['tag'];
    $cover = $_FILES['cover']['name'];
    $tmp = $_FILES['cover']['tmp_name'];

    if (move_uploaded_file($tmp, "covers/".$cover)) {
      echo "File is valid, and was successfully uploaded.\n";
  } else {
      echo "Possible file upload attack!\n";
      
  }

  $sql = "INSERT INTO project_and_services (header, description, tag, cover, created_date, modified_date ) VALUES ('$header', '$description', '$tag', '$cover', now(), now() )";

  mysqli_query($conn, $sql);
  header("location:projects.php");

?>