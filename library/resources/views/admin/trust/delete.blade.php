@extends('layout.app')
@section('title')
    delete trust
@endsection
@section('content')
    <h1 class="text-center text-3xl text-[rgb(34,98,198)]">Are you sure about delete this trust?</h1>
    <h2 class="text-center text-2xl text-blue-800 my-14 font-bold">{{$trust->firstname}} {{$trust->lastname}}</h2>
    <form action="{{route("trusts.remove")}}" method="post" class="flex justify-center">
        @csrf
        @method("delete")
        <input type="hidden" name="id" value="{{$trust->id}}">
        <input type="submit" value="delete trust" class="w-28 h-14 font-bold text-l cursor-pointer border-2 border-red-800 bg-red-800 text-white rounded-full transition-all hover:bg-white hover:text-red-800">
    </form>
@endsection
