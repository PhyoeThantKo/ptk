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
                          <div class="flex flex-col items-start justify-end w-full lg:space-x-2 md:w-2/3 md:mt-0 md:flex-row md:items-center px-6 pb-4 lg:pb-0">
                              <a href="home" class="lg:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">Home</a>
                              <a href="portfolio" class="lg:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">Portfolio</a>
                              <a href="contact" class="lg:bg-pink-200 lg:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-pink-600">Contact</a>
                              <a href="about" class="lg:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">About</a>
                              <a href="articles" class="lg:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-yellow-600">Articles</a>
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

    <!-- contact info-->
    <section class="w-full px-6">
      <div class="max-w-7xl mx-auto pt-24" id="contact">
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
    </section>
    <!--Footer-->
    <div class="text-center mt-7 mb-3 pt-3 border-t-2 lg:w-2/6 font-light text-gray-800 mx-auto">
      ©2022 Designed & developed with ♥ by <a href="home" class="underline underline-offset-auto hover:text-gray-500 hover:border-gray-500">PTK</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>
</html>