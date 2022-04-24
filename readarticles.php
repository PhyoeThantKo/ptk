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
     <link rel="icon" type="image/x-icon" href="../public/images/fav.webp">

<body  class="bg-notsowhite" style="font-family:'Product Sans Regular'">
<section class="fixed w-full px-6 py-2 lg:py-0 lg:mt-3 z-50 bg-notsowhite lg:bg-transparent shadow-md lg:shadow-none">
      <div class="mx-auto max-w-7xl">

          <nav class="relative z-50 select-none" x-data="{ showMenu: false }">
              <div class="flex items-center lg:h-11 lg:rounded-l-full lg:rounded-r-full lg:bg-earth">
                  <div class="flex items-center justify-start h-full lg:px-6">
                    <a href="" class="text-3xl lg:text-2xl font-extrabold hover:text-light_theme">
                      PTK
                      <span class="font-light text-sm">
                        PRODUCT DESIGN + WEB DEV
                      </span>
                    </a>
                  </div>
                  <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                      <div class="flex-col justify-end w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                          <a href="" class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">PTK</a>
                          <div class="flex flex-col items-start justify-end w-full lg:space-x-2 md:w-2/3 md:mt-0 md:flex-row px-6 pb-4 md:pb-0">
                              <a href="../home" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">Home</a>
                              <a href="../portfolio" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">Portfolio</a>
                              <a href="../contact" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">Contact</a>
                              <a href="../about" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">About</a>
                              <a href="../articles" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-yellow-600">Articles</a>
                          </div>
                      </div>
                  </div>
                  <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center justify-center bg-gray-300 w-10 h-10 rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                      <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak="">
                          <path d="M4 6h16M4 12h16M4 18h16"></path>
                      </svg>
                      <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak="">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                  </div>
              </div>
          </nav>

      </div>
</section>

<section class="w-full px-6">
<div class="max-w-7xl pt-24 lg:px-4 mx-auto">
     <p class="text-gray-700">
          <a href="/ptk" class="text-light_theme">PTK</a><img src="../public/images/navi_next.svg" class="inline-block"><a href="../articles">Articles</a><img src="../public/images/navi_next.svg" class="inline-block"><a href="../articles.php?tag_id=<?php echo $articles['tag_id'] ?>"><?php echo $articles['tag_name'] ?></a>
     </p>
     <h1 class="text-2xl md:text-4xl lg:text-5xl text-gray-800 my-2"><?php echo $articles['header']; ?></h1>
     <p class="text-gray-700">
          <?php
               $timestamp = $articles['created_date'];
               $MySQLDataBaseDateTime = "$timestamp";
               echo DateTime::createFromFormat("Y-m-d H:i:s",$MySQLDataBaseDateTime)->format("d/m/Y");
          ?>
          <span class="text-gray-500">By <a href="../home" class="underline underline-offset-auto hover:text-gray-600 hover:border-gray-600">Phyoe Thant Ko</a></span>
     </p>

     <div class="py-8 leading-relaxed md:leading-loose text-lg md:text-2xl lg:text-lg">
          <?php echo $articles['code'] ?>
     </div>

</div>
</section>

<section class="w-full px-6">
<div class="text-xl md:text-2xl max-w-7xl mx-auto px-4 my-8">
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
</section>

<footer class="bg-gray-800 px-6 w-full pt-4 pb-8 xl:pt-8">
    <div class="max-w-7xl mx-auto text-gray-100 dark:text-gray-100">
        <ul class="text-lg font-light pb-4 md:flex flex-wrap justify-center">
            <li class="md:w-1/3 lg:w-1/3">
                <div>
                    <h2 class="text-gray-300 dark:text-gray-100 text-3xl mb-1">
                        PTK
                    </h2>
                    <p class="text-gray-400">
                    product design + web dev, quality blogs, magic services and more
                    </p>
                </div>
            </li>
            <li class="mt-4 md:mt-0 md:w-1/3 lg:w-1/3">
                <div class="md:text-center">
                    <h2 class="text-gray-300 text-md uppercase mb-3">
                        Site Map
                    </h2>
                    <ul>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-100">
                            <a href="../home" class="hover:text-gray-500 text-gray-400">
                                Home
                            </a>
                        </li>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-100">
                            <a href="../articles" class="hover:text-gray-500 text-gray-400">
                                Articles
                            </a>
                        </li>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-100">
                            <a href="../portfolio" class="hover:text-gray-500 text-gray-400">
                                Portfolio
                            </a>
                        </li>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-100">
                            <a href="../contact" class="hover:text-gray-500 text-gray-400">
                                Contact
                            </a>
                        </li>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-200">
                            <a href="../about" class="hover:text-gray-500 text-gray-400">
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="mt-4 md:mt-0 md:w-1/3 lg:w-1/3">
                <div class="md:text-center">
                    <h2 class="text-gray-300 text-md uppercase mb-4">
                        Social Media
                    </h2>
                    <div class="flex flex-wrap md:max-w-xs md:mx-auto">
                      <a href="https://t.me/ptk7858" class="md:mx-6 mr-10 mb-5">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" /></svg>
                      </a>
                      <a href="https://www.facebook.com/ptk7858" class="md:mx-6 mr-10 mb-5">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" /></svg>
                      </a>
                      <a href="https://github.com/PhyoeThantKo" class="md:mx-6 mr-10 mb-5">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" /></svg>
                      </a>
                      <a href="https://www.instagram.com/ptk__ig/" class="md:mx-6 mr-10 mb-5">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" /></svg>
                      </a>
                      <a href="https://twitter.com/PTK7858" class="md:mx-6 mr-10 mb-5">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" /></svg>
                      </a>
                  </div>
                </div>
            </li>
        </ul>

        <div class="text-center pt-3 border-t-2 w-full md:w-2/6 font-light text-gray-300 md:mx-auto">
        ©2022 Designed & developed with ♥ by <a href="" class="underline underline-offset-auto hover:text-gray-500 hover:border-gray-500">PTK</a>
        </div>
    </div>
</footer>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>