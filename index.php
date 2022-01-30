<!DOCTYPE html>
<html lang="en" class="font-roboto">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PTK</title>
     <link rel="stylesheet" href="public/style/style.css">
     <link rel="stylesheet" href="app/carousel/style.css">
</head>
<body>

    <!-- nav bar -->
    <div id="nav_container" class="absolute w-full mt-3 z-50">
      <nav class="flex w-11/12 h-11 rounded-l-full rounded-r-full bg-earth mx-auto">
        <div id="logo" class="w-1/2 my-auto ml-6">
          <a href="index.html" class="text-2xl font-extrabold hover:text-light_theme">
            PTK
            <span class="font-light text-sm">
              PRODUCT DESIGN + WEB DEV
            </span>
          </a>
        </div>
        <div id="nav_items" class="w-1/2 my-auto md:text-2xl">
          <ul class="flex lg:ml-48">
            <li class="w-1/5 hover:text-light_theme text-center text-xl">
              <a href="">
                Home
              </a>
            </li>
            <li class="w-1/5 hover:text-light_theme text-center text-xl">
              <a href="" >Portfolio</a>
            </li>
            <li class="w-1/5 hover:text-light_theme text-center text-xl">
              <a href="" >Contact</a>
            </li>
            <li class="w-1/5 hover:text-light_theme text-center text-xl">
              <a href="" >About</a>
            </li>
            <li class="w-1/5 hover:text-yellow-500 text-center text-xl text-light_theme">
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
            <div class="image image1"></div>
          </div>
          <div class="item fade">
            <div class="image image2"></div>
          </div>
          <div class="item fade">
            <div class="image image3"></div>
          </div>
          <div class="item fade">
            <div class="image image4"></div>
          </div>
          <a class="prev has-dflex-center"><i class="fas fa-angle-left"></i></a>
          <a class="next has-dflex-center"><i class="fas fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </section>

<script src='https://use.fontawesome.com/releases/v5.14.0/js/all.js'></script><script  src="app/carousel/script.js"></script>

</body>
</html>