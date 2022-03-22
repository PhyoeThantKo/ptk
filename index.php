<!DOCTYPE html>
<html lang="en" class="bg-notsowhite m-0 p-0 overflow-x-hidden">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PTK</title>
     <link rel="stylesheet" href="public/style/style.css">
     <link rel="stylesheet" href="app/carousel/style.css">
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">
     <style>
      @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap');
     </style>
      <link rel="icon" type="image/x-icon" href="public/images/fav.webp">
</head>
<body style="font-family:'Product Sans Regular'" class="w-full h-full m-0 p-0 overflow-x-hidden">
    <!-- nav bar -->
    <div id="nav_container" class="fixed w-full px-6 lg:mt-3 z-50 bg-notsowhite lg:bg-transparent drop-shadow-xl lg:drop-shadow-none">
      <nav id="nav_bar" class="flex max-w-7xl lg:h-11 lg:rounded-l-full lg:rounded-r-full p-2 lg:p-0 lg:bg-earth mx-auto">
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
              <a href="home">
                Home
              </a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
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
                  <img src="public/images/menu.webp" class="w-7">
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

  <!-- carousel -->
  <section class="has-dflex-center">
    <div class="lx-container-80">
      <div class="lx-row">
        <div class="lx-card carousel-container">
          <div class="item fade">
            <div class="image image1">

            <div class="container max-w-7xl mx-auto h-full">
              <div class="flex flex-col px-6 h-full justify-center">
                <p class="text-gray-100 md:text-6xl text-3xl mb-5" style="
                font-family: 'Manrope', sans-serif;">
                  Web Dev articles &  <span class="md:tracking-wide lg:block">consumer electronics contents</span>
                </p>
                <a href="#blogs">
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 lg:px-8 px-5 py-1 lg:py-2 transition ease-in duration-200 text-center md:text-2xl text-xl text-gray-200 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Read
                  </button>
                </a>
              </div>
            </div>

            </div>
          </div>
          <div class="item fade">
            <div class="image image2">

            <div class="container max-w-7xl mx-auto h-full">
              <div class="flex flex-col px-6 h-full justify-center items-center">
                <p class="text-gray-800 text-center md:text-6xl text-3xl mb-5" style="
                font-family: 'Manrope', sans-serif;">
                  Digital Solutions for </br> <span class="tracking-wide">Business Transformations</span>
                </p>
                <a href="#services">
                    <button type="button" class="bg-pink-500 mx-auto hover:text-gray-200 hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 lg:px-8 px-5 py-1 lg:py-2 transition ease-in duration-200 text-center text-xl md:text-2xl text-gray-900 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                      Services
                    </button>
                </a>
              </div>
            </div>

            </div>
          </div>
          <div class="item fade">
            <div class="image image3">

            <div class="container max-w-7xl mx-auto h-full">
              <div class="flex flex-col px-6 h-full justify-end pb-14">
                <p class="text-gray-100 md:text-6xl text-3xl mb-5" style="
                font-family: 'Manrope', sans-serif;">
                  <span class="lg:block">Portfolio</span> A look at some of my projects
                </p>
                <a href="portfolio">
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 lg:px-8 px-5 py-1 lg:py-2 transition ease-in duration-200 text-center text-xl md:text-2xl text-gray-200 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Portfolio
                  </button>
                </a>
              </div>
            </div>

            </div>
          </div>
          <div class="item fade">
            <div class="image image4">

            <div class="container max-w-7xl mx-auto h-full">
              <div class="flex flex-col px-6 h-full justify-end items-center pb-14">
                <p class="text-gray-100 text-center md:text-6xl text-3xl mb-5" style="
                font-family: 'Manrope', sans-serif;">
                  <span class="lg:block">Let's Talk</span> Anyting big or small
                </p>
                <a href="contact"> 
                    <button type="button" class="bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 lg:px-8 px-5 py-1 lg:py-2 transition ease-in duration-200 text-center text-xl md:text-2xl text-gray-300 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                      Contact
                    </button>
                  </a>
              </div>
            </div>

            </div>
          </div>
          <a class="prev has-dflex-center"><img src="app/carousel/images/prev.svg"></a>
          <a class="next has-dflex-center"><img src="app/carousel/images/next.svg"><i class="fas fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </section>

<!--Hero-->

<section class="w-full px-6">
  <div class="hero max-w-7xl mx-auto mt-8">
    <div class="lg:flex">
      <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
          <img class="w-full h-full lg:max-w-3xl lg:pr-7" src="public/images/Website Creator-pana.svg" alt="Website Creator-pana.svg">
      </div>
      <div class="mx-auto lg:w-1/2 lg:my-auto">
          <div class="lg:max-w-3xl lg:pl-7  text-center lg:text-left">
              <h1 class="text-2xl text-gray-800  dark:text-white md:text-5xl lg:mb-5 ">Website Creation in New Era with PTK</h1>
              <p class="mt-2 text-gray-600 dark:text-gray-400 text-lg md:text-2xl mb-3 lg:mb-6">Young creator evolving with mush interest in clean modern UI, amazin UX & consumer electronics</p>
              <a href="#services"> 
                <button type="button" class="px-4 w-full text-lg md:text-2xl lg:w-auto bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white py-2 lg:py-3 transition ease-in duration-200 text-center shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                    What you can expect
                </button>
              </a>
          </div>
      </div>
    </div>
  </div>
</section>

<!-- articles -->
<section class="w-full px-6">
<div class="articles max-w-7xl mx-auto mt-8" id="blogs">
  <div class="mb-10 md:mb-16">
    <h2 class="text-2xl md:text-4xl lg:text-5xl text-gray-800 py-1">Latest Blogs</h2>
    <p class="text-lg md:text-2xl text-gray-700">Read blogs about web dev, consumer electronics and more</p>
  </div>
  <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
      <?php include("admin/config/config.php");
          $result = mysqli_query($conn, "SELECT posts.*, tags.tag_name FROM posts LEFT JOIN tags ON  posts.tag_id = tags.tag_id ORDER BY  posts.created_date DESC LIMIT 6 ");
      ?>

      <?php while ($row = mysqli_fetch_assoc($result)): ?>

      <div class="overflow-hidden shadow-lg bg-white rounded-xl cursor-pointer space-y-3">
          <a href="articles/<?php echo $row['post_id']?>" class="w-full block lg:h-80">
              <img alt="blog photo" src="admin/covers/<?php echo $row['cover'] ?>" class="max-h-40 w-full object-cover"/>
              <div class="dark:bg-gray-800 w-full p-4">
                  <p class="text-pink-400 text-md font-light">
                      <?php echo $row['tag_name'] ?>
                  </p>
                  <p class="text-gray-700 dark:text-white text-lg md:text-2xl h-20 max-h-20 md:mb-2">
                      <?php echo $row['header']; ?>
                  </p>
              </div>
          </a>
      </div>

      <?php endwhile; ?>

    </div>

    <div class="w-full">
      <div class="max-w-7xl mx-auto flex justify-end">
      <a href="articles" class="inline-flex justify-center items-center mt-6 hover:text-gray-300 text-xl bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-32 h-10 transition ease-in duration-200 text-center shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">Read More</a>
      </div>
    </div>
</div>
</section>

<!-- services -->
<section class="w-full px-6">
<div class="max-w-7xl mx-auto mt-20 pt-4 border-t-2" id="services">
  <div class="mb-10 md:mb-16">
    <h2 class="text-2xl md:text-4xl lg:text-5xl text-gray-800 py-1">Services</h2>
    <p class="text-lg md:text-2xl text-gray-700">I can solve your problems in these ways. So call me if you need someone for...</p>
  </div>
  <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
    <?php
      include("config/config.php");
      $result = mysqli_query($conn, "SELECT * FROM project_and_services WHERE tag = 'service' ");
    ?>
      <?php while($service = mysqli_fetch_assoc($result)): ?>

      <div class="p-8 space-y-3 border-2 border-pink-400 dark:border-pink-300 rounded-3xl">
        <img src="admin/covers/<?php echo $service['cover'] ?>" class="w-7 h-7">

        <h1 class="text-2xl text-gray-800 capitalize dark:text-white"><?php echo $service['header'] ?></h1>

        <p class="text-gray-500 dark:text-gray-500 text-lg font-medium">
        <?php echo $service['description']?>
        </p>

          <a href="mailto:phyoethantko7858@gmail.com?subject=Help%20me%20create%20modern%20responsive%20website%20with%20smooth%20user%20experience" class="inline-flex p-2 text-pink-500 capitalize transition-colors duration-200 transform bg-pink-100 rounded-full dark:bg-pink-500 dark:text-white hover:underline hover:text-pink-600 dark:hover:text-pink-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </a>
        </div>
    <?php endwhile; ?>
  </div>
</div>
</section>
<!-- contact and portfolio -->

<div class="bg-gradient-to-r from-pink-300 via-purple-300 to-indigo-400 dark:bg-gray-800 mt-16 w-full">
    <div class="md:flex md:items-center md:justify-between py-8 md:py-14 max-w-7xl px-6 lg:px-0 mx-auto z-20 text-center md:text-left">
        <h2 class="text-2xl md:text-4xl lg:text-5xl text-gray-800 dark:text-white ">
            <span class="block lg:mb-2">
                Got a project ?
            </span>
            <span class="block text-lg md:text-2xl text-gray-700">
            or see some of my capabilities </br> through my portfolio ?
            </span>
        </h2>
        <div class="flex mt-4 md:mt-0 md:flex-shrink-0 w-full md:w-auto ">
            <div class=" inline-flex rounded-md w-1/2">
            <a href="contact" class="w-full">
              <button type="button" class="w-full md:px-6 text-lg md:text-2xl md:w-auto bg-light_theme mx-auto border border-pink-600 hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white py-1 md:py-2 lg:py-3 transition ease-in duration-200 text-center shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                  Contact
              </button>
              </a>
            </div>
            <div class="ml-3 inline-flex rounded-md w-1/2  ">
            <a href="portfolio" class="w-full">
                <button type="button" class="w-full md:px-6 text-lg md:text-2xl md:w-auto border mx-auto border-pink-600 hover:border-pink-800 hover:text-black focus:ring-pink-500 focus:ring-offset-pink-200 text-white py-1 md:py-2 lg:py-3 transition ease-in duration-200 text-center shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                  Portfolio
              </button>
            </a>
            </div>
        </div>
    </div>
</div>

<!--  Newsletter -->
<section class="w-full px-6">
<div class="container max-w-7xl mx-auto py-9 md:py-12" id="newsletter">
  <div class="items-center flex flex-col-reverse lg:flex-row md:px-5 lg:px-0">
    <div class="w-full lg:w-1/2 text-center lg:text-left">
        <div class="lg:max-w-xl mx-auto lg:mx-0">
          <h1 class="text-2xl md:text-4xl text-gray-800 dark:text-white lg:text-4xl">Subscribe To The <span class="text-pink-500">Monthly Newsletter</span></h1>

          <p class="mt-4 text-gray-600 text-lg md:text-2xl dark:text-gray-400">be my fridend, be the first to know latest tech news, reviews and<span class="font-medium text-pink-500"> magic web services </span></p>

        <div class="md:flex md:justify-center lg:justify-start items-center md:mt-8 lg:space-y-0">
          <input id="email" type="text" class="mb-3 md:mb-0 md:px-6 text-lg md:text-2xl px-9 py-1 md:py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-400 dark:focus:border-pink-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-pink-300" placeholder="Email Address">
                            
          <a href="" class="m-0">
            <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white md:px-6 text-lg md:text-2xl px-9 py-1 md:py-2 ml-2 md:ml-8 transition ease-in duration-200 text-center shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
              Subscribe
            </button>
          </a>
        </div>
      </div>
    </div>
        
    <div class="flex justify-end w-full lg:w-1/2">
      <img class=" md:max-w-md md:max-h-md" src="public/images/Email campaign-bro.svg">
    </div>
  </div>
</div>
</section>

<!-- Footer -->
<?php include('components/footer.php') ?>
<script type="text/javascript" src="nav.js"></script>
<script  src="app/carousel/script.js"></script>

</body>
</html>