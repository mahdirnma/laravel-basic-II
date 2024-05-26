@extends('layout.app')
@section('title')
    delete professor
@endsection
@section('header')
    <h2>Delete Professor</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex flex-col items-center justify-around">
        <p class="text-red-900 text-2xl font-bold">Are you sure about deleting the professor?</p>
        <div class="flex flex-col items-center">
            <p class="text-2xl mb-8">name : {{$professor->firstname}} {{$professor->lastname}}</p>
            <p class="text-2xl">national_code : {{$professor->national_code}}</p>
        </div>
        <form action="{{route("removeProfessor")}}" method="post">
            @csrf
            @method("delete")
            <input type="hidden" name="id" value="{{$professor->id}}">
            <input type="submit" value="delete" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">;
        </form>

    </div>
@endsection
