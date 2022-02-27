<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Projects and Services</title>
     <link rel="stylesheet" href="../public/style/style.css">
</head>
<body>
<div id="container" class="flex">
          <!--side bar-->
          <div class="flex flex-col min-h-screen w-64 px-4 py-8 border-r dark:bg-gray-800 dark:border-gray-600">
               <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">PTK</h2>
          
               <div class="flex flex-col justify-between flex-1 mt-6">
                    <nav>
                         <a class="flex items-center px-4 py-2 text-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="index.php">
                              <img src="images/dashboard.svg">
     
                              <span class="mx-4 font-medium">Dashboard</span>
                         </a>
     
                         <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="post-new.php">
                              <img src="images/post_add.svg">
     
                              <span class="mx-4 font-medium">New Post</span>
                         </a>

                         <a class="flex items-center px-4 py-2 mt-5 bg-gray-200 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="projects.php">
                              <img src="images/project.svg">
     
                              <span class="mx-4 font-medium">Projects and Services</span>
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

          <div class="m-7">
               <div class="p-1.5 w-full sm:w-auto overflow-hidden bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-700 mb-6">
                    <div class="space-y-2 sm:space-y-0 sm:flex sm:-mx-1">
                         <a href="newproject.php">
                         <button class="w-full px-4 py-1 text-white transition-colors duration-200 transform bg-pink-600 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-pink-500 focus:bg-pink-500 focus:ring focus:ring-pink-300 focus:ring-opacity-40">
                              Upload New Project
                         </button>
                         </a>
                    </div>
               </div>

               <div class="text-3xl text-gray-800">Services</div>

               <section class="bg-white dark:bg-gray-900">
                    <?php
                         include("config/config.php");
                         $result = mysqli_query($conn, "SELECT * FROM project_and_services WHERE tag = 'service' ");
                    ?>
                    <div class="container px-6 py-12 mx-auto">
                         <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                              <?php while($service = mysqli_fetch_assoc($result)): ?>
                                   <div>
                                   <img src="covers/<?php echo $service['cover'] ?>" class="w-8 h-8">
                                   <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white"><?php echo $service['header'] ?></h1>
                    
                                   <p class="mt-2 text-gray-500 dark:text-gray-400"><?php echo $service['description'] ?></p>
                                   </div>
                              <?php endwhile; ?>
                         </div>
                    </div>
               </section>

               <div class="text-3xl text-gray-800">Projects</div>
               <section class="bg-white dark:bg-gray-900">
                    <?php
                         include("config/config.php");
                         $projectresult = mysqli_query($conn, "SELECT * FROM project_and_services WHERE tag = 'project' ");
                    ?>
                    <div class="container px-6 py-12 mx-auto">
                         <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                              <?php while($project = mysqli_fetch_assoc($projectresult)): ?>
                                   <div>
                                   <img src="covers/<?php echo $project['cover'] ?>" class="w-60 h-40">
                                   <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white"><?php echo $project['header'] ?></h1>
                    
                                   <p class="mt-2 text-gray-500 dark:text-gray-400"><?php echo $project['description'] ?></p>
                                   </div>
                              <?php endwhile; ?>
                         </div>
                    </div>
               </section>
          </div>

</div>
</body>
</html>