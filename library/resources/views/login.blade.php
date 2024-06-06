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
<div class="w-svw h-svh flex justify-center items-center">
    <form action="" method="post" class="w-4/12 h-5/6 flex flex-col items-center bg-[rgb(34,98,198)] rounded-3xl pt-3">
        @csrf
        <h1 class="text-white text-5xl font-extrabold">Login</h1>
        <label for="username" class="mt-14 mb-4 text-white text-2xl" >Username</label>
        <input type="text" name="username" id="username" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        <label for="password" class="mt-14 mb-4 text-white text-2xl" >Password</label>
        <input type="password" name="password" id="password" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        <input type="submit" value="login" class="w-2/6 h-12 text-[rgb(34,98,198)] text-l hover:text-xl transition-all bg-white mt-20 cursor-pointer rounded-2xl">
        <a href="{{route("signin")}}" class="text-white mt-7">don't have account?</a>
    </form>
</div>
</body>
</html>
