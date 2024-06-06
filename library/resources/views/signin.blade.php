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
        <h1 class="text-white text-5xl font-extrabold">Signin</h1>
        <div class="flex w-full justify-evenly mt-10">
            <label for="firstname" class="text-white text-2xl" >Firstname</label>
            <input type="text" name="firstname" id="firstname" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <div class="flex w-full justify-evenly mt-10">
            <label for="lastname" class="text-white text-2xl" >Lastname</label>
            <input type="text" name="lastname" id="lastname" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <div class="flex w-full justify-evenly mt-10">
            <label for="age" class="text-white text-2xl">Age</label>
            <input type="number" name="age" id="age" min="3" max="70" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <div class="flex w-full justify-evenly mt-10">
            <label for="username" class="text-white text-2xl" >Username</label>
            <input type="text" name="username" id="username" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <div class="flex w-full justify-evenly mt-10">
            <label for="password" class="text-white text-2xl" >Password</label>
            <input type="password" name="password" id="password" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <input type="submit" value="signin" class="w-2/6 h-12 text-[rgb(34,98,198)] text-l hover:text-xl transition-all bg-white mt-12 cursor-pointer rounded-2xl">
        <a href="{{route("login")}}" class="text-white mt-7">have account?</a>
    </form>
</div>
</body>
</html>
