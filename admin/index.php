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
<?php include("config/auth.php") ?>
<div id="container" class="flex">
          <!--side bar-->
          <div class="flex flex-col min-h-screen w-64 px-4 py-8 border-r dark:bg-gray-800 dark:border-gray-600">
               <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">PTKCE</h2>
          
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

                         <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="projects.php">
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
               <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10">

                    <?php include("config/config.php");

                    $result = mysqli_query($conn, "SELECT posts.*, tags.tag_name FROM posts LEFT JOIN tags ON  posts.tag_id = tags.tag_id ORDER BY  posts.created_date DESC ");

                    ?>

                    <?php while ($row = mysqli_fetch_assoc($result)): ?>

                    <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
                         <a href="#" class="w-full block h-full">
                              <img alt="blog photo" src="covers/<?php echo $row['cover'] ?>" class="max-h-40 w-full object-cover"/>
                              <div class="bg-white dark:bg-gray-800 w-full p-4">
                                   <p class="text-indigo-500 text-md font-medium">
                                        <?php echo $row['tag_name'] ?>
                                   </p>
                                   <p class="text-gray-800 dark:text-white text-xl h-20 max-h-20 font-medium mb-2">
                                        <?php echo $row['header']; ?>
                                   </p>
                                   <div class="flex flex-wrap justify-starts items-center mt-4">
                                        <a href="post-edit.php?post_id=<?php echo $row['post_id'] ?>" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-pink-100 hover:bg-pink-200 rounded-2xl">
                                             Edit
                                        </a>
                                        <a href="post-del.php?post_id=<?php echo $row['post_id'] ?>" class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-pink-100 hover:bg-pink-200 rounded-2xl">
                                             Delete
                                        </a>
                                   </div>
                              </div>
                         </a>
                    </div>

                    <?php endwhile; ?>
 
               </div>
          </div>

</div>
</body>
</html>