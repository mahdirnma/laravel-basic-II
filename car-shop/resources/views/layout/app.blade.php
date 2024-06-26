<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<div class="header">
    <div class="content">
        <h1>@yield("h1")</h1>
        @yield("content")
    </div>
    <nav class="navigation">
        <ul>

            <li><a href="{{route("showCar")}}">خودروها</a></li>
            <li><a href="{{route("showBrand")}}">برند ها</a></li>
            <li><a href="{{route("showEngine")}}">دسته بندی موتورها</a></li>
        </ul>
    </nav>
</div>
</body>
</html>
