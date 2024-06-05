<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-svw h-svh">
    <div class="w-full h-[13%] flex items-center pl-16">
        <h1 class="text-3xl font-bold text-blue-500">Library</h1>
        <form action="" method="get" class="w-7/12 h-full flex items-end justify-end pb-3">
            <label for="search"></label>
            <input type="search" name="search" id="search" placeholder="search" class="outline-0 pl-10 rounded-full w-9/12 h-14 bg-gray-100">
        </form>
    </div>
    <div class="w-full h-[87%] flex">
        <div class="w-2/12 h-full rounded-tr-[70px] bg-blue-500">
            <nav class="w-full h-4/6">
                <ul class="w-full h-full flex flex-col items-end justify-center">
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-2"><a href="">dashboard</a></li>
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-2"><a href="">books</a></li>
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-2"><a href="">writers</a></li>
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-2"><a href="">trusts</a></li>
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-2"><a href="">categories</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</body>
</html>
