<!DOCTYPE html>
<html lang="en" class="bg-notsowhite">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PTK portfolio</title>
     <link rel="stylesheet" href="public/style/style.css">
     <link rel="stylesheet" href="public/style/fonts/googlesans.css">
</head>
<body style="font-family:'Product Sans Regular'">
    <!--nav bar-->
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
                <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
                  <a href="index.php">
                    Home
                  </a>
                </li>
                <li class="w-1/5 bg-pink-200 text-pink-500 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl">
                  <a href="portfolio.php" >Portfolio</a>
                </li>
                <li class="w-1/5 hover:text-pink-500 rounded-full py-1 text-center text-base lg:text-xl text-gray-700">
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

    <!--hero-->
    <section class="h-screen text-white flex flex-col items-center justify-center text-center" style="background: url('public/images/scattered-forcefields.svg');">
      <div class="w-3/4 text-2xl text-gray-300">
        <div>Product design + web development Myanmar</div>
        <div class="text-6xl my-3 text-gray-200 leading-tight">I help people get personal spaces on the internet with technology</div>
        <div>
          <a href="" class="transform hover:translate-x-1 inline-flex hover:text-gray-500 text-gray-300">About Me <span class="mr-4 ml-2"><svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="15" y1="16" x2="19" y2="12" />  <line x1="15" y1="8" x2="19" y2="12" /></svg></span>
          </a>
          <a href="#cases" class="transform hover:translate-x-1 inline-flex hover:text-gray-500 text-gray-300">My projects<span class="mr-4 ml-2"><svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="15" y1="16" x2="19" y2="12" />  <line x1="15" y1="8" x2="19" y2="12" /></svg></span>
          </a>
        </div>
      </div>
    </section>
    
    <!--showcase this website-->
    <div class="w-full my-8">
      <div class="text-3xl grid place-items-center my-6">
        <p class="tracking-widest text-gray-600">Are you looking for my projects?</p>
        <h2 class="text-6xl text-gray-700 font-medium tracking-wide">This website itself is my project</h2>
      </div>
      <div class="mx-auto rounded-3xl w-11/12" style="background: url('public/images/mckup22.png') no-repeat center/cover ; height: 75vh;">
      </div>
    </div>

</body>
</html>