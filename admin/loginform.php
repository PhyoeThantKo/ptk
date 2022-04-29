<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="../public/style/style.css">
</head>
<body>

<div class="w-full h-screen font-sans" style="background: url(images/lgb.webp) no-repeat center/cover;">
    <div class="container flex items-center justify-center flex-1 h-full mx-auto">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form action="login.php" method="POST" class="max-w-sm p-10 m-auto bg-white bg-opacity-25 rounded shadow-xl">
                    <p class="mb-8 text-2xl font-light text-center text-black">
                        Login
                    </p>
                    <div class="mb-2">
                        <div class=" relative ">
                            <input type="text" name="email" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="email"/>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class=" relative ">
                                <input type="password" name="password" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="password"/>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <button type="submit" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    Validate
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>