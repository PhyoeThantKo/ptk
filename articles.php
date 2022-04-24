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
              <section class="fixed w-full px-6 py-2 lg:py-0 lg:mt-3 z-50 bg-notsowhite lg:bg-transparent shadow-md lg:shadow-none">
                <div class="mx-auto max-w-7xl">
                    <nav class="relative z-50 select-none" x-data="{ showMenu: false }">
                      
                        <div class="flex items-center lg:h-11 lg:rounded-l-full lg:rounded-r-full lg:bg-earth">
                        <div class="md:ml-3 my-auto grid place-items-end">
                          <button class="p-1 " @click="sidebarOpen = !sidebarOpen">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                          </button>
                        </div>
                            <div class="flex items-center md:w-1/2 justify-start h-full lg:px-6">
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
                                    <div class="flex flex-col items-start justify-end w-full lg:space-x-2 md:w-2/3 md:mt-0 md:flex-row lg:px-4 pb-4 md:pb-0">
                                        <a href="home" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-lg lg:text-xl text-gray-700">Home</a>
                                        <a href="portfolio" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-lg lg:text-xl text-gray-700">Portfolio</a>
                                        <a href="contact" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-lg lg:text-xl text-gray-700">Contact</a>
                                        <a href="about" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-lg lg:text-xl text-gray-700">About</a>
                                        <a href="articles" class="md:bg-pink-200 md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-lg lg:text-xl text-pink-600">Articles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>

                </div>
              </section>
              <!--Contents-->
              <div class="flex md:pt-20 h-full">
                <!--Side bar nav-->
                <aside class="overflow-y-auto flex-shrink-0 h-full fixed top-0 md:static z-50 md:z-0 w-52 flex flex-col transition-all duration-300 bg-gray-100 md:bg-transparent" :class="{'-ml-64 md:-ml-52 ': !sidebarOpen }">
                  <nav class="flex-1 flex flex-col fixed w-52">
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
                
                <div class="md:w-10/12 mx-auto  mt-16 md:mt-0 z-0 md:static">
                  <div class="max-w-7xl mx-auto px-6">
                    <div class="hidden md:block">
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

                    <div class="flex flex-col-reverse md:flex-row bg-notsowhite md:h-56 md:max-h-56 md:mr-3 md:my-8 md:border border-gray-200 md:border-gray-400 rounded-t-lg md:rounded-lg overflow-hidden mb-3 border-b-2 md:mb-0">
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
                </div>

                <div class="w-1/12 mt-16 hidden mr-10 lg:block">
                    <div class="border border-gray-400 w-full p-14">
                      Ads
                    </div>
                </div>
              </div>
          </div>
    </div>

</body>
</html>