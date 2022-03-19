<!DOCTYPE html>
<html lang="en" class="bg-notsowhite">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact PTK</title>
     <link rel="stylesheet" href="public/style/style.css">
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">
     <link rel="icon" type="image/x-icon" href="public/images/fav.webp">

</head>
<body style="font-family:'Product Sans Regular'">
    <!--nav bar-->
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
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="home">
                Home
              </a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="portfolio" >Portfolio</a>
            </li>
            <li class="w-1/5 bg-pink-200 text-pink-500 rounded-full py-1 text-center text-base lg:text-xl ">
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

    <!-- contact info-->
    <div class="lg:mx-16 mx-4 pt-24" id="contact">
          <div>
            <h2 class="lg:text-5xl text-3xl text-gray-800 py-1">Contact</h2>
            <p class="lg:text-2xl text-lg text-gray-600">Ready to team up or have a question to ask? Let’s connect.  Here are the easiest
               ways to reach me.</p>
          </div>


          <div class="container py-16 mx-auto">
                <div class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                    <div class=" w-full lg:space-y-4 lg:mx-4">
                      <h2 class="text-gray-700 lg:text-3xl text-2xl">Call</h2>
                      <p class="text-gray-600 lg:text-2xl text-lg">+959785854399</p>
                      <br><br>
                      <h2 class="text-gray-700 lg:text-3xl text-2xl">Email</h2>
                      <p class="text-gray-600 lg:text-2xl text-lg">phyoethantko7858@gmail.com</p>
                    </div>

                    <div class=" w-full lg:space-y-4 lg:mx-4">
                      <h2 class="text-gray-700 lg:text-3xl text-2xl">Visiting Address</h2>
                      <p class="text-gray-600 lg:text-2xl text-lg"><span>4/20</span><br>Paleik,Sintgaing <br><span>Mandalay,Myanmar</span></p>
                    </div>

                    <div class=" w-full lg:space-y-4 space-y-7 lg:mx-4 text-left">
                        <h2 class="text-gray-700 lg:text-3xl text-2xl">Social Media</h2>

                        <div class="grid grid-cols-4 gap-y-4 lg:max-w-xs">
                          <a href="https://t.me/ptk7858">
                            <svg class="h-7 w-7 hover:text-gray-900 text-gray-600 dark:hover:text-white transition-colors duration-200"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" /></svg>
                          </a>
                          <a href="https://www.facebook.com/ptk7858">
                            <svg class="h-7 w-7 hover:text-gray-900 text-gray-600 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" /></svg>
                          </a>
                          <a href="https://github.com/PhyoeThantKo">
                            <svg class="h-7 w-7 hover:text-gray-900 text-gray-600 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" /></svg>
                          </a>
                          <a href="https://www.instagram.com/ptk__ig/">
                            <svg class="h-7 w-7 hover:text-gray-900 text-gray-600 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" /></svg>
                          </a>
                          <a href="https://twitter.com/PTK7858">
                            <svg class="h-7 w-7 hover:text-gray-900 text-gray-600 dark:hover:text-white transition-colors duration-200"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" /></svg>
                          </a>
                        </div>
                    </div>
                </div>
          </div>
    </div>
    <!--Footer-->
    <div class="text-center mt-7 mb-3 pt-3 border-t-2 lg:w-2/6 font-light text-gray-800 mx-auto">
      ©2022 Designed & developed with ♥ by <a href="home" class="underline underline-offset-auto hover:text-gray-500 hover:border-gray-500">PTK</a>
    </div>

      <script type="text/javascript" src="nav.js"></script>

</body>
</html>