<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tags</title>
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
     
                         <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                              <img src="images/post_add.svg">
     
                              <span class="mx-4 font-medium">Post</span>
                         </a>
     
                         <a class="flex items-center px-4 py-2 mt-5 text-gray-600 bg-gray-200 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="tags.php">
                              <img src="images/category.svg">
     
                              <span class="mx-4 font-medium">Categories</span>
                         </a>
     
                         <hr class="my-6 border-gray-200 dark:border-gray-600" />
     
                         <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                              <img src="images/logout.svg">
     
                              <span class="mx-4 font-medium">Log out</span>
                         </a>
                    </nav>
     
                    <div class="flex absolute bottom-10 items-center px-4 -mx-2">
                         <img class="object-cover mx-2 rounded-full h-9 w-9" src="images/ptk.png" alt="avatar"/>
                         <h4 class="mx-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">Phyoe Thant Ko</h4>
                    </div>
               </div>
          </div>

<!-- right content -->

<div class="container mx-auto px-4 sm:px-8 max-w-3xl">
    <div class="py-8">
        <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Category
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Description
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    Created at
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                    <a href="tag-new.php">
                                        <button class="w-36  py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-pink-600 rounded-md hover:bg-pink-500 focus:outline-none focus:ring focus:ring-pink-300 focus:ring-opacity-80">
                                            Create New Tag
                                        </button>
                                    </a>
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("config/config.php");
                                $result = mysqli_query($conn, "SELECT * FROM tags");
                            ?>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo $row['tag_name'] ?>
                                        </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    <?php echo $row['about_tag'] ?>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    <?php echo $row['created_date'] ?>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                   <a href="tag-edit.php?tag_id=<?php echo $row['tag_id'] ?>" class="text-indigo-600 hover:text-indigo-900">
                                        Edit
                                   </a>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="tag-del.php?tag_id= <?php echo $row['tag_id'] ?>" class="text-red-600 hover:text-red-900">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</body>
</html>