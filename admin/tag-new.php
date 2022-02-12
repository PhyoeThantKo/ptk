<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Create New Tag</title>
     <link rel="stylesheet" href="/ptk/public/style/style.css">
</head>
<body>

     <div class="bg-white rounded-lg shadow sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">

     <form action="tag-add.php" method="POST" class="px-4 py-8 sm:px-10">
          <div class="relative mt-6">
               <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300">
                    </div>
               </div>
               <div class="relative flex justify-center text-sm leading-5">
                    <span class="px-2 text-gray-500 bg-white">
                    Add New Tag
                    </span>
               </div>
          </div>
        <div class="mt-6">
            <div class="w-full space-y-6">
               <div class="w-full">
                    <div class=" relative ">
                        <input type="text" name="name" id="name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-pink-600 focus:border-transparent" placeholder="Tag name"/>
                    </div>
                    </div>
                    <div class="w-full">
                        <div class=" relative ">
                            <input type="text" name="about" id="about" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-pink-600 focus:border-transparent" placeholder="Tag description"/>
                            </div>
                        </div>
                         <div class="w-full">
                            <div>
                                <span class="block w-full rounded-md shadow-sm">
                                     <input type="submit" value="Add tag" class="py-2 px-4  bg-pink-600 hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200  text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
                                </span>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="px-4 py-6 border-t-2 border-gray-200 bg-gray-50 sm:px-10">
                    <p class="text-xs leading-5 text-gray-500">
                        Tags can help users filter by tags for smooth experience, PTK
                    </p>
               </div>
     </form>

</body>
</html>