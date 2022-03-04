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
          <a href="" class="text-2xl font-extrabold hover:text-light_theme">
            PTK
            <span class="font-light text-sm">
              PRODUCT DESIGN + WEB DEV
            </span>
          </a>
        </div>
        <div id="nav_items" class="w-1/2 my-auto mr-6">
          <ul class="flex lg:ml-36">
            <li class="w-1/5 bg-pink-200 text-pink-500 rounded-full py-1 text-center text-base lg:text-xl ">
              <a href="/ptk">
                Home
              </a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="/ptk/portfolio" >Portfolio</a>
            </li>
            <li class="w-1/5  hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="/ptk/contact" >Contact</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
              <a href="/ptk/about" >About</a>
            </li>
            <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-yellow-500">
              <a href="/ptk/articles">Articles</a>
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
                <a href="#blogs" class="">
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 w-36 h-12 transition ease-in duration-200 text-center text-2xl text-gray-300 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Read
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="item fade">
            <div class="image image2">
              <div class="h-60 w-4/6 text-6xl mx-auto my-auto">
                <p class="text-white text-center font-serif font-medium tracking-wide">
                  Digital Solutions for </br> <span class="tracking-wide">Business Transformations</span>
                </p>
                <div class="w-full grid place-items-center">
                  <a href="#services" class="">
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
                <a href="/ptk/portfolio" class="">
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 w-36 h-12 transition ease-in duration-200 text-center text-2xl text-gray-300 font-medium shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Portfolio
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="item fade">
            <div class="image image4">
              <div class="h-60 w-4/6 text-6xl mx-auto grid place-self-end pb-72">
                <p class="text-white text-center font-serif font-medium tracking-wide">
                  Let's Talk </br> Anyting big or small
                </p>
                <div class="w-full grid place-items-center">
                  <a href="/ptk/contact" class=""> 
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
            <a href="#services"> 
              <button type="button" class="px-4 w-full lg:w-auto bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white py-2 lg:py-3 transition ease-in duration-200 text-center text-xl shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                  What you can expect
              </button>
            </a>
        </div>
    </div>
  </div>
</div>

<!-- articles -->
<div class="articles mx-16 mt-6" id="blogs">
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
          <a href="/ptk/articles/<?php echo $row['post_id']?>" class="w-full block h-full">
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

    <a href="/ptk/articles" class="inline-flex justify-center items-center hover:text-gray-300 text-xl absolute right-24 bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-32 h-10 transition ease-in duration-200 text-center shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">Read More  </a>
</div>

<!-- services -->
<div class="mx-16 mt-20 pt-4 border-t-2" id="services">
  <div>
    <h2 class="text-4xl py-1 text-gray-800">Services</h2>
    <p class="text-2xl text-gray-700">I can solve your problems in these ways. So call me if you need someone for...</p>
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
            <a href="/ptk/contact" class="">
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-36 h-14 transition ease-in duration-200 text-center text-2xl shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Contact
                  </button>
              </a>
            </div>
            <div class="ml-3 inline-flex rounded-md">
            <a href="/ptk/portfolio" class="">
                  <button type="button" class="border-2 border-pink-600 hover:border-pink-800 hover:text-black focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-36 h-14 transition ease-in duration-200 text-center text-2xl shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
                    Portfolio
                  </button>
            </a>
            </div>
        </div>
    </div>
</div>

<!--  Newsletter -->
<div class="container px-10 py-12 mx-auto" id="newsletter">
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
<?php include('components/footer.php') ?>
<script  src="app/carousel/script.js"></script>

</body>
</html>