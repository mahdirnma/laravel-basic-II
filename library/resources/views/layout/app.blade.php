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
<div class="w-svw h-svh">
    <div class="w-full h-[13%] flex items-center pl-16">
        <h1 class="text-3xl font-bold text-[rgb(34,98,198)]">Library</h1>
        @yield('search')
    </div>
    <div class="w-full h-[87%] flex">
        <div class="w-2/12 h-full rounded-tr-[70px] bg-[rgb(34,98,198)]">
            <nav class="w-full h-4/6">
                <ul class="w-full h-full flex flex-col items-end justify-center">
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-4 hover:text-blue-200"><a href="{{route('dashboard')}}">dashboard</a></li>
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-4 hover:text-blue-200"><a href="{{route('books')}}">books</a></li>
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-4 hover:text-blue-200"><a href="{{route('writers')}}">writers</a></li>
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-4 hover:text-blue-200"><a href="{{route('trusts')}}">trusts</a></li>
                    <li class="w-10/12 text-start text-white font-medium tracking-wide my-4 hover:text-blue-200"><a href="{{route('categories')}}">categories</a></li>
                </ul>
            </nav>
            <a href="{{route("logout")}}" class="text-white ml-3 font-bold text-xl"><-- Logout</a>
        </div>
        <div class="w-10/12 h-full flex justify-center">
            <div class="w-11/12 h-full pt-5">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
