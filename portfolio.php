<!DOCTYPE html>
<html lang="en" class="bg-notsowhite">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PTK portfolio</title>
     <link rel="stylesheet" href="public/style/style.css">
     <script defer src="components/navlinkactive.js"></script>
     <link rel="stylesheet" href="components/navlinkactive.css">
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">
</head>
<body style="font-family:'Product Sans Regular'">
    <!-- nav bar -->
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
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl ">
              <a href="home">
                Home
              </a>
            </li>
            <li class="w-1/5 bg-pink-200 text-pink-500 rounded-full py-1 text-center text-base lg:text-xl">
              <a href="portfolio" >Portfolio</a>
            </li>
            <li class="w-1/5  hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="contact" >Contact</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="about" >About</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-yellow-500">
              <a href="articles">Articles</a>
            </li>
          </ul>
        </div>

        <div id="mobile_nav" class="lg:hidden w-1/12 ml-4">
          
          <div class="relative inline-block ">
              <!-- Dropdown toggle button -->
              <button id="menu_button" class="relative z-10 block py-1">
                  <img src="public/images/menu.png" class="w-7">
              </button>

              <!-- Dropdown menu -->
              <div id="menu" class="absolute hidden right-0 z-20 w-48 py-2 mt-2 bg-gray-100 rounded-md shadow-xl dark:bg-gray-800">
                  <a href="home" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      Home
                  </a>

                  <a href="articles" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      Articles
                  </a>
                  
                  <a href="portfolio" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      Portfolio
                  </a>
                  
                  <hr class="border-gray-200 dark:border-gray-700 ">

                  <a href="contact" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      Contact
                  </a>

                  <a href="about" class="block px-4 py-3 text-sm md:text-lg text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                      About
                  </a>

              </div>
          </div>
        </div>
      </nav>
    </div>

    <!--hero-->
    <section class="h-screen text-white flex flex-col items-center justify-center text-center" style="background: url('public/images/scattered-forcefields.svg');">
      <div class="w-3/4 text-2xl text-gray-300">
        <div>Product design + web development Myanmar</div>
        <div class="text-6xl my-3 text-gray-200 leading-tight">I help people get personal spaces on the internet with technology</div>
        <div>
          <a href="/ptk/about" class="transform hover:translate-x-1 inline-flex hover:text-gray-500 text-gray-300">About Me <span class="mr-4 ml-2"><svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="15" y1="16" x2="19" y2="12" />  <line x1="15" y1="8" x2="19" y2="12" /></svg></span>
          </a>
          <a href="#cases" class="transform hover:translate-x-1 inline-flex hover:text-gray-500 text-gray-300">My projects<span class="mr-4 ml-2"><svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="15" y1="16" x2="19" y2="12" />  <line x1="15" y1="8" x2="19" y2="12" /></svg></span>
          </a>
        </div>
      </div>
    </section>
    
    <!--showcase this website-->
    <div class="w-full my-8">
      <div class="text-3xl grid place-items-center my-6">
        <p class="tracking-widest text-gray-600">Are you looking for my projects?</p>
        <h2 class="text-6xl text-gray-700 font-medium tracking-wide">This website itself is my project</h2>
      </div>
      <div class="mx-auto rounded-3xl w-11/12" style="background: url('public/images/mckup22.png') no-repeat center/cover ; height: 75vh;">
      </div>
    </div>

    <!-- showcase some works -->
    <section class="px-16 lg:my-20" id="cases">
      <div class="lg:mb-12">
          <h2 class="text-4xl py-1 text-gray-800">Cases</h2>
          <p class="text-2xl text-gray-700">A look at some of my projects</p>
      </div>
      <div class="grid grid-cols-2 gap-10">
      <?php
        include("admin/config/config.php");
        $projectresult = mysqli_query($conn, "SELECT * FROM project_and_services WHERE tag = 'project' ");
      ?>
        <?php while($project = mysqli_fetch_assoc($projectresult)): ?>

          <div class="flex w-full lg:h-64 mx-auto overflow-hidden bg-white rounded-xl shadow-lg dark:bg-gray-800">
            <div class="w-1/2 " style="background: url('admin/covers/<?php echo $project['cover'] ?>') no-repeat center/cover"></div>

            <div class="w-1/2  my-auto p-4 md:p-4">
                <h1 class="text-3xl text-gray-800 dark:text-white"><?php echo $project['header'] ?></h1>

                <p class="mt-2 mb-12 text-gray-600 dark:text-gray-400"><?php echo $project['description'] ?></p>

                <a href="" class="transform hover:translate-x-1 inline-flex hover:text-gray-500 text-gray-700 text-xl">View Project <span class="mr-4 ml-2"><svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="15" y1="16" x2="19" y2="12" />  <line x1="15" y1="8" x2="19" y2="12" /></svg></span>
                </a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </section>

    <!-- contact -->
    <div class="bg-gradient-to-r from-pink-300 via-purple-300 to-indigo-400 dark:bg-gray-800 mt-16">
      <div class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
        <h2 class="lg:text-5xl text-gray-800 dark:text-white sm:text-xl mx-8">
            <span class="block  lg:mb-2">
                Got a project ?
            </span>
            <span class="block text-3xl text-gray-700">
            Ready to team up or have a question to ask? Let’s connect.
            </span>
        </h2>
        <div class="lg:mt-0 lg:flex-shrink-0 mx-16">
            <div class=" inline-flex rounded-md">
            <a href="/ptk/contact" class="">
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-36 h-14 transition ease-in duration-200 text-center text-2xl shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Contact
                  </button>
              </a>
            </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include('components/footer.php') ?>
</div>

<script type="text/javascript" src="nav.js"></script>

</body>
</html>