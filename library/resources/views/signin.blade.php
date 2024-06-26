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
    <form action="{{route('signin')}}" method="post" class="w-4/12 h-5/6 flex flex-col items-center bg-[rgb(34,98,198)] rounded-3xl pt-3">
        @csrf
        <h1 class="text-white text-5xl font-extrabold">Signin</h1>
        <div class="flex w-full justify-evenly mt-8">
            <label for="firstname" class="text-white text-2xl" >Firstname</label>
            <input type="text" name="firstname" id="firstname" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <div class="flex w-full justify-evenly mt-8">
            <label for="lastname" class="text-white text-2xl" >Lastname</label>
            <input type="text" name="lastname" id="lastname" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <div class="flex w-full justify-evenly mt-8">
            <label for="national_code" class="text-white text-2xl" >national code</label>
            <input type="text" name="national_code" id="national_code" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <div class="flex w-full justify-evenly mt-8">
            <label for="age" class="text-white text-2xl">Age</label>
            <input type="number" name="age" id="age" min="3" max="70" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <div class="flex w-full justify-evenly mt-8">
            <label for="username" class="text-white text-2xl" >Username</label>
            <input type="text" name="username" id="username" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <div class="flex w-full justify-evenly mt-8">
            <label for="password" class="text-white text-2xl" >Password</label>
            <input type="password" name="password" id="password" class="w-7/12 h-8 rounded-md outline-0 pl-4">
        </div>
        <input type="submit" value="signin" class="w-2/6 h-12 text-[rgb(34,98,198)] text-l hover:text-xl transition-all bg-white mt-8 cursor-pointer rounded-2xl">
        <a href="{{route("login.show")}}" class="text-white mt-7">have account?</a>
    </form>
    @if($errors->any())
        <div class="absolute left-20 top-1/3 w-auto h-auto p-4 bg-pink-200 rounded-3xl">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-red-900">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>
