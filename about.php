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
                              <a href="contact" class="lg:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-gray-700">Contact</a>
                              <a href="about" class="lg:bg-pink-200 lg:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-base lg:text-xl text-pink-600">About</a>
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

     <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>