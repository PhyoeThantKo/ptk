<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Primary Meta Tags -->
    <meta name="description" content="What is PTKCE and what does it stand for?">
    <meta name="image" property="og:image" content="https://ptkce.com/app/carousel/images/about.webp">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ptkce.com/about">
    <meta property="og:title" content="What does PTKCE stand for?">
    <meta property="og:image" content="https://ptkce.com/app/carousel/images/about.webp">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://ptkce.com/about">
    <meta name="twitter:creator" content="@SPTK7858">
    <meta name="twitter:title" content="What is PTKCE and what does it stand for?">
    <meta name="twitter:image" content="https://ptkce.com/app/carousel/images/about.webp">

     <title>About PTKCE</title>
     <link rel="stylesheet" href="public/style/min.css">
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">
     <link rel="icon" type="image/x-icon" href="public/images/fav.webp">
</head>
<body style="font-family:'Product Sans Regular'" class="bg-notsowhite">
    <!-- Nav Bar-->
    <section class="fixed w-full px-6 py-2 lg:py-0 lg:mt-3 z-50 bg-notsowhite lg:bg-transparent shadow-md lg:shadow-none">
      <div class="mx-auto max-w-7xl">

          <nav class="relative z-50 select-none" x-data="{ showMenu: false }">
              <div class="flex items-center lg:h-11 lg:rounded-l-full lg:rounded-r-full lg:bg-earth">
                  <div class="flex items-center justify-start md:w-1/2 h-full lg:px-6">
                    <a href="" class="text-3xl lg:text-2xl font-extrabold hover:text-light_theme">
                      PTKCE
                      <span class="font-light text-sm">
                        PRODUCT DESIGN + WEB DEV
                      </span>
                    </a>
                  </div>
                  <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                      <div class="flex-col justify-end w-full lg:px-4 h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                          <a href="" class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">PTKCE</a>
                          <div class="flex flex-col items-start justify-end w-full lg:space-x-2 md:w-2/3 md:mt-0 md:flex-row px-6 md:px-0 pb-4 md:pb-0">
                              <a href="home" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-lg lg:text-xl text-gray-700">Home</a>
                              <a href="portfolio" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-lg lg:text-xl text-gray-700">Portfolio</a>
                              <a href="contact" class="md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-lg lg:text-xl text-gray-700">Contact</a>
                              <a href="about" class="md:bg-pink-200 md:px-4 hover:text-pink-500 rounded-full py-2 lg:py-1 text-lg lg:text-xl text-pink-600">About</a>
                              <a href="articles" class="md:px-4 hover:text-pink-500 text-yellow-600 rounded-full py-2 lg:py-1 text-lg lg:text-xl">Articles</a>
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

    <!--Image-->
    <section class="w-full bg-gray-500">
        <div class="max-w-7xl px-6 mx-auto">
            <img src="public/images/squa.svg" class="absolute top-0 right-0 w-52 hidden lg:block">
            <div class="flex items-baseline justify-center w-full">
                <div class="flex-initial w-1/2">
                <img src="public/images/vs.svg" class="lg:w-32 w-24 -mb-6">
                </div>
                <div class="flex items-baseline flex-initial w-1/2">
                <img src="public/images/be.svg" class="-mr-72">
                <img src="public/images/tsc.png" class="min-h-full pt-12">
                </div>
            </div>
        </div>
    </section>

    <!--Info-->
    <section class="w-full my-10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row px-6">
            <div class="w-1/3 py-3 lg:py-0">
                <img src="public/images/fav.webp">
            </div>
            <div class="flex items-center lg:w-2/3 text-justify tracking-wide text-gray-800">Hello, that's me above, admin of PTKCE. I’m creating digital experiences for any kind of client, individual, or business and solving problems by making different websites. <br> <br> After high school, due to pandemics and military coups, I couldn’t go to the university. So I started learning how to create fully functional websites on the internet to help business transformations in Myanmar. <br> <br> At present, PTKCE is sharing useful blogs about web dev and consumer electronics on various social media and offering web development services. PTKCE have further plans and products for you in Burma.</div>
        </div>
    </section>

    <!--Footer-->
    <?php include('components/footer.php') ?>

     <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>