<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard</title>
     <link rel="stylesheet" href="../public/style/style.css">
</head>
<body>
<div id="container" class="flex">
          <!--side bar-->
          <div class="flex flex-col min-h-screen w-64 px-4 py-8 border-r dark:bg-gray-800 dark:border-gray-600">
               <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">PTK</h2>
          
               <div class="flex flex-col justify-between flex-1 mt-6">
                    <nav>
                         <a class="flex items-center px-4 py-2 text-gray-700 rounded-md bg-gray-200 dark:bg-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="index.php">
                              <img src="images/dashboard.svg">
     
                              <span class="mx-4 font-medium">Dashboard</span>
                         </a>
     
                         <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="post-new.php">
                              <img src="images/post_add.svg">
     
                              <span class="mx-4 font-medium">New Post</span>
                         </a>
     
                         <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="tags.php">
                              <img src="images/category.svg">
     
                              <span class="mx-4 font-medium">Categories</span>
                         </a>
     
                         <hr class="my-6 border-gray-200 dark:border-gray-600" />
     
                         <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                              <img src="images/logout.svg">
     
                              <span class="mx-4 font-medium">Log out</span>
                         </a>
                    </nav>
     
                    <div class="flex items-center px-4 -mx-2">
                         <img class="object-cover mx-2 rounded-full h-9 w-9" src="images/ptk.png" alt="avatar"/>
                         <h4 class="mx-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">Phyoe Thant Ko</h4>
                    </div>
               </div>
          </div>

    <!--right content-->

     </div>
</body>
</html>