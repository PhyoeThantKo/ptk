<?php
     include("admin/config/config.php");
          
     $post_id = $_GET['post_id'];
     $articlesresult = mysqli_query($conn, "SELECT posts.*, tags.tag_name FROM posts LEFT JOIN tags ON  posts.tag_id = tags.tag_id WHERE posts.post_id = $post_id");

     $articles = mysqli_fetch_assoc($articlesresult);
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $articles['header']; ?></title>
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">
     <link rel="stylesheet" href="public/style/style.css">

<body  class="bg-notsowhite" style="font-family:'Product Sans Regular'">
<div id="nav_container" class="fixed w-full mt-3 z-50">
     <nav id="nav_bar" class="flex w-11/12 h-11 rounded-l-full rounded-r-full bg-earth mx-auto">
        <div id="logo" class="w-1/2 my-auto ml-6">
          <a href="" class="text-2xl font-extrabold hover:text-light_theme">
            PTK
            <span class="font-light text-sm">
              PRODUCT DESIGN + WEB DEV
            </span>
          </a>
        </div>
        <div id="nav_items" class="w-1/2 my-auto mr-6">
          <ul class="flex lg:ml-36">
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="index.php">
                Home
              </a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="portfolio.php" >Portfolio</a>
            </li>
            <li class="w-1/5  hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="contact.php" >Contact</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="" >About</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-yellow-500">
              <a href="articles.php">Articles</a>
            </li>
          </ul>
        </div>
     </nav>
</div>

<div class="w-11/12 pt-24 mx-auto">
     <h1 class="text-4xl text-gray-800"><?php echo $articles['header']; ?></h1>
</div>
</body>
</html>