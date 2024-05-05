<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
</head>
<body>
<div style="display: flex;width: 100%;height: 97vh">
    <div style="width: 80%;display: flex;flex-direction:column;align-items: center;justify-content: center">@yield('content')</div>
    <nav style="background-color: rgba(162,162,162,0.57);width: 20%;height: 100%;border-radius: 20px">
        <ul style="list-style: none">
            <li style="text-align: center;font-size: 35px;font-weight: bold;margin-top: 30px"><a href="/admin/foods" style="text-decoration: none;color: black">غذاها</a></li>
            <li style="text-align: center;font-size: 35px;font-weight: bold;margin-top: 70px"><a href="/admin/categories" style="text-decoration: none;color: black">دسته بندی غذا</a></li>
        </ul>
    </nav>
</div>
</body>
</html>
