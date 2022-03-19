<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Articles</title>
     <link rel="stylesheet" href="public/style/style.css">
     <script src="//unpkg.com/alpinejs" defer></script>
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">
     <link rel="icon" type="image/x-icon" href="public/images/fav.webp">

</head>
<body class="bg-notsowhite" style="font-family:'Product Sans Regular'"> 
    <div x-data="{ sidebarOpen: false }" class="  h-full">
          <div class="flex-1 h-full">
              <!--nav bar-->
              <div id="nav_container" class="fixed w-full lg:mt-3 z-40">
                <nav id="nav_bar" class="flex lg:w-11/12 lg:h-11 lg:rounded-l-full lg:rounded-r-full p-2 lg:p-0 bg-transparent lg:bg-earth bg-notsowhite mx-auto">
                  <!--Desktop Navigation-->
                  <div class="ml-3 my-auto grid place-items-end">
                    <button class="p-1 " @click="sidebarOpen = !sidebarOpen">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                    </button>
                  </div>
                  <div id="logo" class="lg:w-1/2 md:w-11/12 w-10/12 my-auto lg:ml-6 ml-2">
                    <a href="" class="text-2xl font-medium text-gray-900 hover:text-light_theme">
                      PTK
                    </a>
                  </div>
                  <div id="nav_items" class="relative my-auto mx-6 hidden lg:block">
                    <ul class="flex lg:ml-36">
                      <li class="px-3 mx-0 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
                        <a href="home">
                          Home
                        </a>
                      </li>
                      <li class="px-3 mx-0 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
                        <a href="portfolio" >Portfolio</a>
                      </li>
                      <li class="px-3 mx-0  hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
                        <a href="contact" >Contact</a>
                      </li>
                      <li class="px-3 mx-0 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
                        <a href="about" >About</a>
                      </li>
                      <li class="px-3 mx-0 bg-pink-200 text-pink-500 rounded-full py-1 text-center text-base lg:text-xl">
                        <a href="articles">Articles</a>
                      </li>
                    </ul>
                  </div>

                </nav>
              </div>
              <!--Contents-->
              <div class="flex md:pt-20 h-full">
                <!--Side bar nav-->
                <aside class="overflow-y-auto flex-shrink-0 w-3/5 h-full fixed top-0 md:static z-50 md:z-0 md:w-1/6 flex flex-col transition-all duration-300 bg-gray-100 md:bg-transparent" :class="{'-ml-64 md:-ml-52 lg:-ml-72': !sidebarOpen }">
                  <nav class="flex-1 flex flex-col ">
                  <div id="logo" class="md:hidden py-2 px-5 my-1 flex">
                    <button class="p-1 " @click="sidebarOpen = !sidebarOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <a href="" class="text-2xl ml-2 font-medium text-gray-900 hover:text-light_theme">
                      PTK
                    </a>
                  </div>
                  <a href="home" class="py-2 px-5 my-1 text-gray-700 rounded-r-full hover:bg-gray-200 focus:bg-gray-400">
                      Home
                  </a>
                  <a href="articles" class="py-2 px-5 my-1 text-gray-700 rounded-r-full bg-gray-200">
                      Articles
                  </a>
                            
                  <a href="portfolio" class="py-2 px-5 my-1 text-gray-700 rounded-r-full hover:bg-gray-200 focus:bg-gray-400">
                      Portfolio
                  </a>
                            
                  <a href="contact" class="py-2 px-5 my-1 text-gray-700 rounded-r-full hover:bg-gray-200 focus:bg-gray-400">
                       Contact
                  </a>

                  <a href="about" class="py-2 px-5 my-1 text-gray-700 rounded-r-full hover:bg-gray-200 focus:bg-gray-400">
                      About
                  </a>

                  <hr class="border border-gray-300">

                  <a href="/ptk/articles" class="py-2 px-5 my-1 text-gray-700 rounded-r-full hover:bg-gray-200 focus:bg-gray-400">For You</a>
                  <?php
                    include('admin/config/config.php');
                    $tagresult = mysqli_query($conn, "SELECT * FROM tags");
                    while($tags = mysqli_fetch_assoc($tagresult)):
                  ?>
                  <a href="articles.php?tag_id=<?php echo $tags['tag_id'] ?>" class="py-2 px-5 my-1 text-gray-700 hover:bg-gray-200 focus:bg-gray-400 rounded-r-full">
                  <?php echo $tags['tag_name'] ?>
                  </a>
                  <?php endwhile; ?>
                  </nav>
                </aside>
                
                <div class="lg:w-4/6 w-11/12 mx-auto md:pl-6 lg:pl-8 md:border-l-2 mt-16 md:mt-0 z-0 md:static">

                <div class="ml-20 hidden md:block">
                  <p class="text-2xl text-gray-800">Latest Blogs on Tech</p>
                </div>
                  <!--query posts-->
                  <?php
                    if(isset($_GET['tag_id'])){
                      $tag_id = $_GET['tag_id'];
                      $articlesresult = mysqli_query($conn, "SELECT posts.*, tags.tag_name FROM posts LEFT JOIN tags ON  posts.tag_id = tags.tag_id WHERE posts.tag_id = $tag_id ORDER BY  posts.created_date DESC ");
                    } else {
                      $articlesresult = mysqli_query($conn, "SELECT posts.*, tags.tag_name FROM posts LEFT JOIN tags ON  posts.tag_id = tags.tag_id ORDER BY  posts.created_date DESC ");
                    }
                    while($articles = mysqli_fetch_assoc($articlesresult)):
                  ?>

                  <div class="flex flex-col-reverse md:flex-row bg-notsowhite md:ml-20 md:h-44 md:mr-3 md:my-8 md:border border-gray-200 md:border-gray-400 rounded-t-lg md:rounded-lg overflow-hidden mb-3 border-b-2 md:mb-0">
                      <a href="articles/<?php echo $articles['post_id']?>" class="md:w-2/3 py-4 md:px-5">
                        <h1 class="text-gray-800 text-xl md:text-2xl">
                            <?php echo $articles['header'] ?>
                        </h1>

                        <p class="text-gray-600 text-xs md:text-base py-1">
                          <?php echo $articles['tag_name'];
                          $timestamp = $articles['created_date']; ?>
                          <span class="p-4">
                            <?php
                              $MySQLDataBaseDateTime = "$timestamp";
                              echo DateTime::createFromFormat("Y-m-d H:i:s",$MySQLDataBaseDateTime)->format("d/m/Y");
                            ?>
                          </span>
                        </p>
                      </a>
                      <a href="articles/<?php echo $articles['post_id']?>" class="md:w-1/3 h-48 md:h-auto md:my-3 md:mx-4 rounded-xl bg-landscape " style="background: url('admin/covers/<?php echo $articles['cover'] ?>') no-repeat center/cover;">
                      </a>
                  </div>
                    <?php endwhile; ?>

                </div>
                <div class="w-1/6 mx-auto mt-16 hidden lg:block">
                    <div class="border border-gray-400 w-full p-1 h-40">
                      Ads
                    </div>
                </div>
              </div>
          </div>
    </div>

</body>
</html>