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
     <link rel="stylesheet" href="../public/style/fonts/googlesans.css">
     <link rel="stylesheet" href="../public/style/style.css">

<body  class="bg-notsowhite" style="font-family:'Product Sans Regular'">
<div id="nav_container" class="fixed w-full lg:mt-3 z-50">
      <nav id="nav_bar" class="flex lg:w-11/12 lg:h-11 lg:rounded-l-full lg:rounded-r-full p-2 lg:p-0 bg-transparent lg:bg-earth bg-notsowhite mx-auto">
        <div id="logo" class="lg:w-1/2 md:w-11/12 w-10/12 my-auto lg:ml-6 ml-2">
          <a href="" class="text-3xl lg:text-2xl font-extrabold hover:text-light_theme">
            PTK
            <span class="font-light text-sm">
              PRODUCT DESIGN + WEB DEV
            </span>
          </a>
        </div>
        <div id="nav_items" class="w-1/2 my-auto mr-6 hidden lg:block">
          <ul class="flex lg:ml-36">
            <li class="w-1/5 bg-pink-200 text-pink-500 rounded-full py-1 text-center text-base lg:text-xl">
              <a href="../home">
                Home
              </a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="../portfolio" >Portfolio</a>
            </li>
            <li class="w-1/5  hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="../contact" >Contact</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="../about" >About</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-yellow-500">
              <a href="../articles">Articles</a>
            </li>
          </ul>
        </div>
        <div id="mobile_nav" class="lg:hidden w-1/12 ml-4">
          
          <div class="relative inline-block ">
              <!-- Dropdown toggle button -->
              <button id="menu_button" class="relative z-10 block py-1">
                  <img src="../public/images/menu.png" class="w-7">
              </button>

              <!-- Dropdown menu -->
              <div id="menu" class="absolute hidden right-0 z-20 w-48 py-2 mt-2 bg-gray-100 rounded-md shadow-xl dark:bg-gray-800">
                  <a href="../home" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      Home
                  </a>

                  <a href="../articles" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      Articles
                  </a>
                  
                  <a href="../portfolio" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      Portfolio
                  </a>
                  
                  <hr class="border-gray-200 dark:border-gray-700 ">

                  <a href="../contact" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      Contact
                  </a>

                  <a href="../about" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      About
                  </a>

              </div>
          </div>
        </div>
      </nav>
</div>

<div class="w-11/12 pt-24 px-4 mx-auto">
     <p class="text-gray-700">
          <a href="/ptk" class="text-light_theme">PTK</a><img src="../public/images/navi_next.svg" class="inline-block"><a href="/ptk/articles">Articles</a><img src="../public/images/navi_next.svg" class="inline-block"><?php echo $articles['tag_name'] ?>
     </p>
     <h1 class="text-2xl md:text-4xl lg:text-5xl text-gray-800 my-2"><?php echo $articles['header']; ?></h1>
     <p class="text-gray-700">
          <?php
               $timestamp = $articles['created_date'];
               $MySQLDataBaseDateTime = "$timestamp";
               echo DateTime::createFromFormat("Y-m-d H:i:s",$MySQLDataBaseDateTime)->format("d/m/Y");
          ?>
          <span class="text-gray-500">By <a href="index.php" class="underline underline-offset-auto hover:text-gray-600 hover:border-gray-600">Phyoe Thant Ko</a></span>
     </p>

     <div class="py-8 leading-relaxed md:leading-loose text-lg md:text-2xl lg:text-lg">
          <?php echo $articles['code'] ?>
     </div>

</div>
<div class="text-xl md:text-2xl w-11/12 mx-auto px-4 my-8">
     <h2>Our Services That You Might Interest</h2>
     <hr class="ml-36 mb-1 border-b-2 border-gray-600">
     <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 my-8 text-center lg:text-left">
          <?php 
               $result = mysqli_query($conn, "SELECT * FROM project_and_services WHERE tag = 'service' LIMIT 3 ");
               while($service = mysqli_fetch_assoc($result)): ?>
                    <div>
                         <img src="../admin/covers/<?php echo $service['cover'] ?>" class="lg:w-28 lg:h-28 w-11 h-11 mx-auto lg:mx-0">
                         <h1 class="mt-4 text-base md:text-lg font-semibold text-gray-600 dark:text-white"><?php echo $service['header'] ?></h1>
                    
                         <p class="mt-2 text-base text-gray-500 dark:text-gray-400"><?php echo $service['description'] ?></p>
                    </div>
               <?php endwhile; ?>
     </div>
</div>
<?php include('components/footer.php') ?>
<script src="../nav.js"></script>
</body>
</html>