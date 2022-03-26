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
     <link rel="icon" type="image/x-icon" href="public/images/fav.webp">

</head>
<body style="font-family:'Product Sans Regular'">
    <!-- nav bar -->
    <section class="fixed w-full px-6 py-2 lg:py-0 lg:mt-3 z-50 bg-notsowhite lg:bg-transparent shadow-md lg:shadow-none">
      <div class="mx-auto max-w-7xl">

          <nav class="relative z-50 select-none" x-data="{ showMenu: false }">
              <div class="flex items-center lg:h-11 lg:rounded-l-full lg:rounded-r-full lg:bg-earth">
                  <div class="flex items-center justify-start w-1/4 h-full lg:px-6">
                    <a href="" class="text-3xl lg:text-2xl font-extrabold hover:text-light_theme">
                      PTK
                      <span class="font-light text-sm hidden lg:inline-block">
                        PRODUCT DESIGN + WEB DEV
                      </span>
                    </a>
                  </div>
                  <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                      <div class="flex-col justify-end w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                          <a href="" class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">PTK</a>
                          <div class="flex flex-col items-start justify-end w-full lg:space-x-2 md:w-2/3 md:mt-0 md:flex-row px-6 pb-4 md:pb-0">
                              <a href="home" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">Home</a>
                              <a href="portfolio" class="lg:bg-pink-200 md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-pink-600">Portfolio</a>
                              <a href="contact" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">Contact</a>
                              <a href="about" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">About</a>
                              <a href="articles" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-yellow-600">Articles</a>
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

    <!--hero-->
    <section class="lg:h-screen w-full px-6 text-white flex flex-col items-center justify-center text-center" style="
    background: url('public/images/scattered-forcefields.svg');">
      <div class="max-w-5xl py-36 md:py-56 lg:py-0 mx-auto text-lg md:text-2xl text-gray-300">
        <div>Product design + web development Myanmar</div>
        <div class="text-3xl md:text-4xl lg:text-6xl my-3 text-gray-200">I help people get personal spaces on the internet with technology</div>
        <div>
          <a href="/ptk/about" class="transform hover:translate-x-1 inline-flex hover:text-gray-500 text-gray-300">About Me <span class="mr-4 ml-2"><svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="15" y1="16" x2="19" y2="12" />  <line x1="15" y1="8" x2="19" y2="12" /></svg></span>
          </a>
          <a href="#cases" class="transform hover:translate-x-1 inline-flex hover:text-gray-500 text-gray-300">My projects<span class="mr-4 ml-2"><svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="15" y1="16" x2="19" y2="12" />  <line x1="15" y1="8" x2="19" y2="12" /></svg></span>
          </a>
        </div>
      </div>
    </section>
    
    <!--showcase this website-->
    <section class="w-full px-6">
      <div class="max-w-7xl mx-auto">
        <div class="text-lg md:text-2xl lg:text-3xl grid place-items-center my-4 md:my-6 lg:my-8">
          <p class="tracking-widest text-center text-gray-600">Are you looking for my projects?</p>
          <h2 class="text-2xl md:text-4xl lg:text-6xl text-center text-gray-700 font-medium tracking-wide">This website itself is my project</h2>
        </div>
        <div class="this rounded-3xl grid place-items-center">
          <img src="public/images/mckup22.webp" class="rounded-3xl h-44 md:h-auto">
        </div>
      </div>
    </section>

    <!-- showcase some works -->
    <section class="w-full px-6">
      <div class="max-w-7xl mx-auto lg:my-20 my-10" id="cases">
        <div class="lg:mb-12 mb-6">
            <h2 class="text-2xl md:text-4xl lg:text-5xl py-1 text-gray-800">Cases</h2>
            <p class="text-lg md:text-2xl text-gray-700">A look at some of my projects</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <?php
          include("admin/config/config.php");
          $projectresult = mysqli_query($conn, "SELECT * FROM project_and_services WHERE tag = 'project' ");
        ?>
          <?php while($project = mysqli_fetch_assoc($projectresult)): ?>

            <div class="md:flex w-full h-96 text-center md:text-left md:h-72 lg:h-64 mx-auto overflow-hidden bg-white rounded-xl shadow-lg dark:bg-gray-800">
              <div class="md:w-1/2 h-1/2 md:h-auto" style="background: url('admin/covers/<?php echo $project['cover'] ?>') no-repeat center/cover"></div>

              <div class="md:w-1/2 h-1/2 md:h-auto my-auto p-4 md:p-4">
                  <h1 class="text-2xl md:text-2xl lg:text-3xl text-gray-800 dark:text-white"><?php echo $project['header'] ?></h1>

                  <p class="text-sm lg:text-base mt-2 mb-12 text-gray-600 dark:text-gray-400"><?php echo $project['description'] ?></p>

                  <a href="<?php echo $project['link'] ?>" class="transform hover:translate-x-1 inline-flex justify-center items-center hover:text-gray-500 text-gray-700 text-base md:text-lg lg:text-xl">View Project <span class="mr-4 ml-2"><svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="15" y1="16" x2="19" y2="12" />  <line x1="15" y1="8" x2="19" y2="12" /></svg></span>
                  </a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>

    <!-- contact -->
    <div class="bg-gradient-to-r w-full from-pink-300 via-purple-300 to-indigo-400 dark:bg-gray-800 mt-16">
      <div class="md:flex md:items-center md:justify-between py-8 max-w-7xl mx-auto md:py-14 z-20 text-center md:text-left px-6 lg:px-0">
        <h2 class="text-2xl md:text-4xl lg:text-5xl text-gray-800 dark:text-white">
            <span class="block lg:mb-2">
                Got a project ?
            </span>
            <span class="block text-lg md:text-2xl text-gray-700">
            Ready to team up or have a question to ask? Let’s connect.
            </span>
        </h2>
        <div class="mt-3 md:mt-0 lg:flex-shrink-0">
            <div class=" inline-flex rounded-md">
            <a href="contact" class="w-full">
                  <button type="button" class="w-full px-4 md:px-8 text-lg md:text-2xl md:w-auto bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white py-1 md:py-2 lg:py-3 transition ease-in duration-200 text-center shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
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

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>