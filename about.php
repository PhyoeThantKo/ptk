<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>About PTK</title>
     <link rel="stylesheet" href="public/style/style.css">
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">
     <link rel="icon" type="image/x-icon" href="public/images/fav.">
</head>
<body style="font-family:'Product Sans Regular'">
     <!-- Nav Bar-->
     <div id="nav_container" class="fixed w-full lg:mt-3 z-50">
          <nav id="nav_bar" class="flex lg:w-11/12 lg:h-11 lg:rounded-l-full lg:rounded-r-full p-2 lg:p-0 bg-transparent lg:bg-earth bg-blue-100 mx-auto">
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
               <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
               <a href="home">
                    Home
               </a>
               </li>
               <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
               <a href="portfolio" >Portfolio</a>
               </li>
               <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
               <a href="contact" >Contact</a>
               </li>
               <li class="w-1/5 bg-pink-200 text-pink-500 rounded-full py-1 text-center text-base lg:text-xl ">
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
                    <img src="public/images/menu." class="w-7">
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

     <div class="min-w-screen min-h-screen bg-pink-100 flex items-center p-5 lg:p-20 overflow-hidden relative pt-28">
          <div class="flex-1 min-h-full min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
               <div class="w-full md:w-1/2">
                    <div class="mb-10 lg:mb-20">
                         <img src="public/images/fav.webp" class="w-8 h-8">
                    </div>
                    <div class="mb-10 md:mb-20 text-gray-600 font-light">
                         <h1 class="font-black uppercase text-3xl lg:text-5xl text-pink-700 mb-10">This page is<br>currently under development</h1>
                         <p>Thank You</p>
                         <p>for checking me out.</p>
                    </div>
                    <div class="mb-20 md:mb-0">
                         <a href="home">
                         <button class="text-lg font-light outline-none focus:outline-none transform transition-all hover:scale-110 text-pink-500 hover:text-pink-600">Retun to Homepage</button>
                         </a>
                    </div>
               </div>
               <div class="w-full md:w-1/2 text-center">
                    <img src="public/images/underdev.webp">
               
               </div>
          </div>
          <div class="w-64 md:w-96 h-96 md:h-full bg-blue-200 bg-opacity-30 absolute -top-64 md:-top-96 right-20 md:right-32 rounded-full pointer-events-none -rotate-45 transform"></div>
          <div class="w-96 h-full bg-indigo-200 bg-opacity-20 absolute -bottom-96 right-64 rounded-full pointer-events-none -rotate-45 transform"></div>
     </div>

     <script type="text/javascript" src="nav.js"></script>
</body>
</html>