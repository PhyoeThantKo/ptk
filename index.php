<!DOCTYPE html>
<html lang="en" class="font-roboto bg-notsowhite">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PTK</title>
     <link rel="stylesheet" href="public/style/style.css">
     <link rel="stylesheet" href="app/carousel/style.css">
     <link rel="stylesheet" href="public/style/navbar.css">
</head>
<body>
    <!-- nav bar -->
    <div id="nav_container" class="fixed w-full mt-3 z-50">
      <nav id="nav_bar" class="flex w-11/12 h-11 rounded-l-full rounded-r-full bg-earth mx-auto">
        <div id="logo" class="w-1/2 my-auto ml-6">
          <a href="index.html" class="text-xl font-extrabold hover:text-light_theme">
            PTK
            <span class="font-light text-sm">
              PRODUCT DESIGN + WEB DEV
            </span>
          </a>
        </div>
        <div id="nav_items" class="w-1/2 my-auto mr-6">
          <ul class="flex lg:ml-40">
            <li class="w-1/5 hover:text-light_theme text-center text-base lg:text-lg text-gray-700">
              <a href="">
                Home
              </a>
            </li>
            <li class="w-1/5 hover:text-light_theme text-center text-base lg:text-lg text-gray-700">
              <a href="" >Portfolio</a>
            </li>
            <li class="w-1/5 hover:text-light_theme text-center text-base lg:text-lg text-gray-700">
              <a href="" >Contact</a>
            </li>
            <li class="w-1/5 hover:text-light_theme text-center text-base lg:text-lg text-gray-700">
              <a href="" >About</a>
            </li>
            <li class="w-1/5 hover:text-yellow-500 text-center text-base lg:text-lg text-light_theme">
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
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-40 h-12 transition ease-in duration-200 text-center text-xl font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
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
                    <button type="button" class="bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-40 h-12 transition ease-in duration-200 text-center text-xl font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
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
                  <button type="button" class="bg-light_theme hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-40 h-12 transition ease-in duration-200 text-center text-xl font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-full">
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
                    <button type="button" class="bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-40 h-12 transition ease-in duration-200 text-center text-xl font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
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
            <h1 class="text-xl font-semibold text-gray-800  dark:text-white lg:text-5xl lg:mb-5 ">Website Creation in New Era with PTK</h1>
            <p class="mt-2 text-gray-600 dark:text-gray-400 lg:text-2xl mb-3 lg:mb-6">Young creator evolving with mush interest in clean modern UI, amazin UX & consumer electronics</p>
            <a href=""> 
              <button type="button" class="px-4 w-full lg:w-auto bg-light_theme mx-auto hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white py-2 lg:py-3 transition ease-in duration-200 text-center text-xl font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full">
                  See what you can expect from me
              </button>
            </a>
        </div>
    </div>
  </div>
</div>

<!-- articles -->
<div class="articles mx-16 mt-6">
  <div>
    <h2 class="text-3xl font-bold py-1">Latest Articles</h2>
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
                  <p class="text-pink-500 text-md font-medium">
                      <?php echo $row['tag_name'] ?>
                  </p>
                  <p class="text-gray-900 dark:text-white text-xl h-20 max-h-20 font-medium mb-2">
                      <?php echo $row['header']; ?>
                  </p>
              </div>
          </a>
      </div>

      <?php endwhile; ?>

    </div>
</div>

<script src='https://use.fontawesome.com/releases/v5.14.0/js/all.js'></script>
<script  src="app/carousel/script.js"></script>
<script src="index.js"></script>

</body>
</html>