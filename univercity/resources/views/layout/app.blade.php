<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
@vite('resources/css/app.css')
</head>
<body>
<div class="bg-gray-200 w-full h-screen flex justify-center items-center">
    <div class="bg-white w-11/12 h-5/6 rounded-2xl flex">
        <div class="w-2/12 h-full bg-violet-950 rounded-s-3xl flex-col items-center">
            <div class="w-full h-20 flex items-center justify-center border-b border-gray-400">
                <h1 class="text-white flex justify-center text-2xl font-medium">UNIVERSITY</h1>
            </div>
            <nav class="h-1/2 w-full px-7 flex flex-col justify-center">
                <p class="text-white font-light text-sm">Main</p>
                <ul class="my-3">
                    <li class="rounded-xl px-4 py-2 hover:bg-blue-400"><a href="{{route("collegians")}}" class="text-white pr-16 py-2.5">collegians</a></li>
                    <li class="rounded-xl px-4 py-2 hover:bg-blue-400"><a href="{{route("students")}}" class="text-white pr-16 py-2.5">students</a></li>
                    <li class="rounded-xl px-4 py-2 hover:bg-blue-400"><a href="{{route("professors")}}" class="text-white pr-16 py-2.5">professors</a></li>
                    <li class="rounded-xl px-4 py-2 hover:bg-blue-400"><a href="{{route("lessons")}}" class="text-white pr-16 py-2.5">lessons</a></li>
                </ul>
            </nav>
            <a href="{{route("home")}}" class="rounded-xl font-bold hover:bg-blue-400 text-white ml-7 py-2.5 pl-4 pr-28">Home</a>
        </div>
        <div class="w-10/12 rounded-e-3xl">
            <div class="w-full h-20 border-b border-gray-400 px-10 flex items-center font-bold text-2xl">
                @yield('header')
            </div>
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
