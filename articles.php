<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="public/style/style.css">
     <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
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
                      <li class="px-3 mx-0 bg-pink-200 text-pink-500 rounded-full py-1 text-center text-base lg:text-xl ">
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
                      <li class="px-3 mx-0 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-yellow-500">
                        <a href="">Articles</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="flex ">

                <aside class="flex-shrink-0 w-1/6 flex flex-col border-r transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
                  <nav class="flex-1 flex flex-col bg-white">
                  <?php
                    include('admin/config/config.php');
                    $tagresult = mysqli_query($conn, "SELECT * FROM tags");
                    while($tags = mysqli_fetch_assoc($tagresult)):
                  ?>
                  <a href="articles.php?tag_id=<?php echo $tags['tag_id'] ?>" class="p-2 active:bg-blue-200 my-1">
                  <?php echo $tags['tag_name'] ?>
                  </a>
                  <?php endwhile; ?>
                  </nav>
                </aside>
                

              </div>
          </div>
    </div>
</body>
</html>