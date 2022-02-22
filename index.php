<!DOCTYPE html>
<html lang="en" class="bg-notsowhite">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PTK</title>
     <link rel="stylesheet" href="public/style/style.css">
     <link rel="stylesheet" href="app/carousel/style.css">
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">
</head>
<body style="font-family:'Product Sans Regular'">
    <!-- nav bar -->
    <div id="nav_container" class="fixed w-full mt-3 z-50">
      <nav id="nav_bar" class="flex w-11/12 h-11 rounded-l-full rounded-r-full bg-earth mx-auto">
        <div id="logo" class="w-1/2 my-auto ml-6">
          <a href="index.html" class="text-2xl font-extrabold hover:text-light_theme">
            PTK
            <span class="font-light text-sm">
              PRODUCT DESIGN + WEB DEV
            </span>
          </a>
        </div>
        <div id="nav_items" class="w-1/2 my-auto mr-6">
          <ul class="flex lg:ml-36">
            <li class="w-1/5 bg-pink-200 text-pink-500 rounded-full py-1 text-center text-base lg:text-xl ">
              <a href="index.php">
                Home
              </a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="" >Portfolio</a>
            </li>
            <li class="w-1/5  hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="contact.php" >Contact</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="" >About</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-yellow-500">
              <a href="">Articles</a>
            </li>
          </ul>
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
              <div id="articles" class="h-52 mt-72 w-4/6 text-6xl ml-16">
                <p class="text-white font-serif font-medium">
                  Web Dev articles & </br> <span class="tracking-wide">consumer electronics contents</span>
                </p>
                <a href="" class="">
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 w-36 h-12 transition ease-in duration-200 text-center text-2xl text-gray-300 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Read
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="item fade">
            <div class="image image2">
              <div id="services" class="h-60 w-4/6 text-6xl mx-auto my-auto">
                <p class="text-white text-center font-serif font-medium tracking-wide">
                  Digital Solutions for </br> <span class="tracking-wide">Business Transformations</span>
                </p>
                <div class="w-full grid place-items-center">
                  <a href="" class="">
                    <button type="button" class="bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 w-36 h-12 transition ease-in duration-200 text-center text-2xl text-gray-300 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                      Services
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item fade">
            <div class="image image3">
              <div id="portfolio" class="h-50 absolute bottom-10 w-4/6 text-6xl ml-16">
                <p class="text-white font-serif font-medium">
                  Portfolio </br>A look at some of my projects
                </p>
                <a href="" class="">
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 w-36 h-12 transition ease-in duration-200 text-center text-2xl text-gray-300 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Portfolio
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="item fade">
            <div class="image image4">
              <div id="contact" class="h-60 w-4/6 text-6xl mx-auto grid place-self-end pb-72">
                <p class="text-white text-center font-serif font-medium tracking-wide">
                  Let's Talk </br> Anyting big or small
                </p>
                <div class="w-full grid place-items-center">
                  <a href="" class=""> 
                    <button type="button" class="bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 w-36 h-12 transition ease-in duration-200 text-center text-2xl text-gray-300 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                      Contact
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <a class="prev has-dflex-center"><i class="fas fa-angle-left"></i></a>
          <a class="next has-dflex-center"><i class="fas fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </section>

<!--Hero-->

<div class="hero p-8 mx-auto">
  <div class="lg:flex">
    <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
        <img class="w-full h-full lg:max-w-3xl lg:pr-7" src="public/images/Website Creator-pana.svg" alt="Website Creator-pana.svg">
    </div>
    <div class="w-11/12 mx-auto lg:w-1/2 lg:my-auto">
        <div class="lg:max-w-3xl lg:pl-7  text-center lg:text-left">
            <h1 class="text-xl text-gray-800  dark:text-white lg:text-5xl lg:mb-5 ">Website Creation in New Era with PTK</h1>
            <p class="mt-2 text-gray-600 dark:text-gray-400 lg:text-2xl mb-3 lg:mb-6">Young creator evolving with mush interest in clean modern UI, amazin UX & consumer electronics</p>
            <a href=""> 
              <button type="button" class="px-4 w-full lg:w-auto bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white py-2 lg:py-3 transition ease-in duration-200 text-center text-xl shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                  See what you can expect from me
              </button>
            </a>
        </div>
    </div>
  </div>
</div>

<!-- articles -->
<div class="articles mx-16 mt-6">
  <div class="mb-16">
    <h2 class="text-4xl text-gray-900 py-1">Latest Blogs</h2>
    <p class="text-2xl text-gray-700">Read blogs about web dev, consumer electronics and more</p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mt-7">
      <?php include("admin/config/config.php");
          $result = mysqli_query($conn, "SELECT posts.*, tags.tag_name FROM posts LEFT JOIN tags ON  posts.tag_id = tags.tag_id ORDER BY  posts.created_date DESC LIMIT 6 ");
      ?>

      <?php while ($row = mysqli_fetch_assoc($result)): ?>

      <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto mb-10">
          <a href="#" class="w-full block h-full">
              <img alt="blog photo" src="admin/covers/<?php echo $row['cover'] ?>" class="max-h-40 w-full object-cover"/>
              <div class="bg-white dark:bg-gray-800 w-full p-4">
                  <p class="text-pink-400 text-md font-light">
                      <?php echo $row['tag_name'] ?>
                  </p>
                  <p class="text-gray-700 dark:text-white text-xl h-20 max-h-20 mb-2">
                      <?php echo $row['header']; ?>
                  </p>
              </div>
          </a>
      </div>

      <?php endwhile; ?>

    </div>
</div>

<!-- services -->
<div class="mx-16 mt-6" id="services">
  <div>
    <h2 class="text-4xl py-1 text-gray-800">Services</h2>
    <p class="text-2xl text-gray-700">I can solve your problems in these ways. So call me if you need someone for...</p>
  </div>
  <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                    <div class="p-8 space-y-3 border-2 border-pink-400 dark:border-pink-300 rounded-3xl">
                        <img src="public/images/pinkux.png" class="w-7 h-7">

                        <h1 class="text-2xl text-gray-800 capitalize dark:text-white">UI/UX research & design</h1>

                        <p class="text-gray-500 dark:text-gray-500 text-lg font-medium">
                        relevant digital experiences & high fidelity people-first ui designs for your website
                        </p>

                        <a href="#" class="inline-flex p-2 text-pink-500 capitalize transition-colors duration-200 transform bg-pink-100 rounded-full dark:bg-pink-500 dark:text-white hover:underline hover:text-pink-600 dark:hover:text-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>

                    <div class="p-8 space-y-3 border-2 border-pink-400 dark:border-pink-300 rounded-3xl">
                        <img src="public/images/responsive.png" class="w-7 h-7">

                        <h1 class="text-2xl text-gray-800 capitalize dark:text-white">Magic Responsive website</h1>

                        <p class="text-gray-500 dark:text-gray-500 text-lg font-medium">
                        reach all corners of the world with information focused websites eg. portfolios & landing pages ...
                        </p>

                        <a href="#" class="inline-flex p-2 text-pink-500 capitalize transition-colors duration-200 transform bg-pink-100 rounded-full dark:bg-pink-500 dark:text-white hover:underline hover:text-pink-600 dark:hover:text-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>

                    <div class="p-8 space-y-3 border-2 border-pink-400 dark:border-pink-300 rounded-3xl">
                    <img src="public/images/data.png" class="w-7 h-7">

                        <h1 class="text-2xl text-gray-800 capitalize dark:text-white">Magnetic Dynamic website</h1>

                        <p class="text-gray-500 dark:text-gray-500 text-lg font-medium">
                        kind of websites that users can interact with & we can collect, update data easily eg. content managements & blogs,
                        </p>

                        <a href="#" class="inline-flex p-2 text-pink-500 capitalize transition-colors duration-200 transform bg-pink-100 rounded-full dark:bg-pink-500 dark:text-white hover:underline hover:text-pink-600 dark:hover:text-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>

                    <div class="p-8 space-y-3 border-2 border-pink-400 dark:border-pink-300 rounded-3xl">
                        <img src="public/images/coming-soon.png" class="w-7 h-7">

                        <h1 class="text-2xl text-gray-800 capitalize dark:text-white">Other services are coming soon for Burmese</h1>

                        <p class="text-gray-500 dark:text-gray-500 text-lg font-medium">
                        subscribe to the newsletter to know when the services are live
                        </p>

                        <a href="#" class="inline-flex p-2 text-pink-500 capitalize transition-colors duration-200 transform bg-pink-100 rounded-full dark:bg-pink-500 dark:text-white hover:underline hover:text-pink-600 dark:hover:text-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>
  </div>
</div>

<!-- contact and portfolio -->

<div class="bg-gradient-to-r from-pink-300 via-purple-300 to-indigo-400 dark:bg-gray-800 mt-16">
    <div class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
        <h2 class="lg:text-5xl text-gray-800 dark:text-white sm:text-xl mx-8">
            <span class="block  lg:mb-2">
                Got a project ?
            </span>
            <span class="block text-3xl text-gray-700">
            or see some of my capabilities </br> through my portfolio ?
            </span>
        </h2>
        <div class="lg:mt-0 lg:flex-shrink-0 mx-8">
            <div class=" inline-flex rounded-md">
            <a href="" class="">
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-36 h-14 transition ease-in duration-200 text-center text-2xl shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Contact
                  </button>
              </a>
            </div>
            <div class="ml-3 inline-flex rounded-md">
            <a href="" class="">
                  <button type="button" class="border-2 border-pink-600 hover:border-pink-800 hover:text-black focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-36 h-14 transition ease-in duration-200 text-center text-2xl shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Portfolio
                  </button>
            </a>
            </div>
        </div>
    </div>
</div>

<!--  Newsletter -->
<div class="container px-10 py-12 mx-auto">
  <div class="items-center lg:flex">
    <div class="w-full lg:w-1/2">
        <div class="lg:max-w-xl">
          <h1 class="text-xl text-gray-800 dark:text-white lg:text-4xl">Subscribe To The <span class="text-pink-500">Monthly Newsletter</span></h1>

          <p class="mt-4 text-gray-600 text-xl dark:text-gray-400">be my fridend, be the first to know latest tech news, reviews and<span class="font-medium text-pink-500"> magic web services </span></p>

        <div class="flex flex-col mt-8 space-y-3 lg:space-y-0 lg:flex-row">
          <input id="email" type="text" class="px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-pink-400 dark:focus:border-pink-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-pink-300" placeholder="Email Address">
                            
          <a href="">
            <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-32 h-10 ml-8 transition ease-in duration-200 text-center text-xl shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
              Subscribe
            </button>
          </a>
        </div>
      </div>
    </div>
        
    <div class="flex items-center justify-center w-96 h-96 mt-6 lg:mt-0 lg:w-1/2">
      <img class="w-full h-full max-w-md" src="public/images/Email campaign-bro.svg">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 pt-4 pb-8 xl:pt-8">
    <div class="px-16 mx-auto text-gray-100 dark:text-gray-100">
        <ul class="text-lg font-light pb-4 flex flex-wrap justify-center">
            <li class="w-1/2 md:w-1/3 lg:w-1/3">
                <div>
                    <h2 class="text-gray-300 dark:text-gray-100 text-3xl mb-1">
                        PTK
                    </h2>
                    <p class="text-gray-400">
                    product design + web dev, quality blogs, magic services and more
                    </p>
                </div>
            </li>
            <li class="w-1/2 md:w-1/3 lg:w-1/3">
                <div class="text-center">
                    <h2 class="text-gray-300 text-md uppercase mb-3">
                        Site Map
                    </h2>
                    <ul>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-100">
                            <a href="#" class="hover:text-gray-500 text-gray-400">
                                Home
                            </a>
                        </li>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-100">
                            <a href="#" class="hover:text-gray-500 text-gray-400">
                                Articles
                            </a>
                        </li>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-100">
                            <a href="#" class="hover:text-gray-500 text-gray-400">
                                Portfolio
                            </a>
                        </li>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-100">
                            <a href="#" class="hover:text-gray-500 text-gray-400">
                                Contact
                            </a>
                        </li>
                        <li class="mb-1 dark:hover:text-white transition-colors duration-200">
                            <a href="#" class="hover:text-gray-500 text-gray-400">
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="w-1/2 md:w-1/3 lg:w-1/3">
                <div class="text-center">
                    <h2 class="text-gray-300 text-md uppercase mb-3">
                        Social Media
                    </h2>
                    <div class="grid grid-cols-4 gap-y-4 place-items-center max-w-xs mx-auto">
                      <a href="https://t.me/ptk7858">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" /></svg>
                      </a>
                      <a href="https://www.facebook.com/ptk7858">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" /></svg>
                      </a>
                      <a href="https://github.com/PhyoeThantKo">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" /></svg>
                      </a>
                      <a href="https://www.instagram.com/ptk__ig/">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" /></svg>
                      </a>
                      <a href="https://twitter.com/PTK7858">
                        <svg class="h-7 w-7 hover:text-gray-600 text-gray-400 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" /></svg>
                      </a>
                  </div>
                </div>
            </li>
        </ul>

        <div class="text-center pt-3 border-t-2 w-2/6 font-light text-gray-300 mx-auto">
        ©2022 Designed & developed with ♥ by <a href="" class="underline underline-offset-auto hover:text-gray-500 hover:border-gray-500">PTK</a>
        </div>
    </div>
</footer>


<script src='https://use.fontawesome.com/releases/v5.14.0/js/all.js'></script>
<script  src="app/carousel/script.js"></script>
<script src="index.js"></script>

</body>
</html>