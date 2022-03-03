<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="public/style/style.css">
     <script src="//unpkg.com/alpinejs" defer></script>
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">

</head>
<body class="bg-notsowhite" style="font-family:'Product Sans Regular'"> 
    <div x-data="{ sidebarOpen: true }" class="  h-screen">
          <div class="flex-1">
              <div id="nav_container" class="relative mt-3 z-50">
                <nav id="nav_bar" class="flex w-11/12 h-11 rounded-l-full rounded-r-full bg-earth mx-auto">
                  <div class="ml-3 my-auto grid place-items-end">
                    <button class="p-1 " @click="sidebarOpen = !sidebarOpen">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                    </button>
                  </div>
                  <div id="logo" class="w-1/2 my-auto ">
                    <a href="" class="text-2xl font-medium text-gray-900 hover:text-light_theme">
                      PTK
                    </a>
                  </div>
                  <div id="nav_items" class="relative my-auto mx-5">
                    <ul class="flex lg:ml-36">
                      <li class="px-3 mx-0 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
                        <a href="index.php">
                          Home
                        </a>
                      </li>
                      <li class="px-3 mx-0 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
                        <a href="portfolio.php" >Portfolio</a>
                      </li>
                      <li class="px-3 mx-0  hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
                        <a href="contact.php" >Contact</a>
                      </li>
                      <li class="px-3 mx-0 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
                        <a href="" >About</a>
                      </li>
                      <li class="px-3 mx-0 bg-pink-200 text-pink-500 rounded-full py-1 text-center text-base lg:text-xl">
                        <a href="">Articles</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="flex mt-4">

                <aside class="flex-shrink-0 w-1/6 flex flex-col border-r transition-all duration-300" :class="{ '-ml-60': !sidebarOpen }">
                  <nav class="flex-1 flex flex-col ">
                  <a href="articles.php" class="p-2 my-1 text-gray-700">For You</a>
                  <?php
                    include('admin/config/config.php');
                    $tagresult = mysqli_query($conn, "SELECT * FROM tags");
                    while($tags = mysqli_fetch_assoc($tagresult)):
                  ?>
                  <a href="articles.php?tag_id=<?php echo $tags['tag_id'] ?>" class="p-2 my-1 text-gray-700">
                  <?php echo $tags['tag_name'] ?>
                  </a>
                  <?php endwhile; ?>
                  </nav>
                </aside>
                
                <div class="w-4/6 mr-2">
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

                  <div class="flex bg-notsowhite ml-20 h-44 mr-3 my-4 border border-gray-400 rounded-lg overflow-hidden">
                      <div class="w-2/3 py-4 px-5">
                        <h1 class="text-gray-800 text-2xl">
                            <?php echo $articles['header'] ?>
                        </h1>

                        <p class="text-gray-600 py-1">
                          <?php echo $articles['tag_name'];
                          $timestamp = $articles['created_date']; ?>   .
                          <span class="p-4">
                            <?php
                              $MySQLDataBaseDateTime = "$timestamp";
                              echo DateTime::createFromFormat("Y-m-d H:i:s",$MySQLDataBaseDateTime)->format("d/m/Y");
                            ?>
                          </span>
                        </p>

                      </div>
                      <div class="w-1/3 m-3 rounded-xl bg-landscape " style="background: url('admin/uploads/<?php echo $articles['cover'] ?>') no-repeat center/cover;">
                      </div>
                    </div>
                    <?php endwhile; ?>

                </div>
                <div class="w-1/6 mx-auto mt-4">
                    <div class="border border-gray-400 w-full p-1 h-40">
                      Ads
                    </div>
                </div>
              </div>
          </div>
    </div>

</body>
</html>