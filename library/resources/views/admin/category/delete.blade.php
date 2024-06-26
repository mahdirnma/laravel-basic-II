@extends('layout.app')
@section('title')
    delete category
@endsection
@section('content')
    <h1 class="text-center text-3xl text-[rgb(34,98,198)]">Are you sure about delete this category?</h1>
    <h2 class="text-center text-2xl text-blue-800 my-14 font-bold">{{$category->title}}</h2>
    <form action="{{route("categories.remove")}}" method="post" class="flex justify-center">
        @csrf
        @method("delete")
        <input type="hidden" name="id" value="{{$category->id}}">
        <input type="submit" value="delete category" class="w-40 h-14 font-bold text-l cursor-pointer border-2 border-red-800 bg-red-800 text-white rounded-full transition-all hover:bg-white hover:text-red-800">
    </form>
@endsection
