@extends('layout.app')
@section('title')
    delete student
@endsection
@section('header')
    <h2>Delete Student</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex flex-col items-center justify-around">
        <p class="text-red-900 text-2xl font-bold">Are you sure about deleting the student?</p>
        <div class="flex flex-col items-center">
            <p class="text-2xl mb-8">name : {{$student->firstname}} {{$student->lastname}}</p>
            <p class="text-2xl">national_code : {{$student->national_code}}</p>
        </div>
        <form action="{{route("removeStudent")}}" method="post" cla>
            @csrf
            @method("delete")
            <input type="hidden" name="id" value="{{$student->id}}">
            <input type="submit" value="delete" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">;
        </form>

    </div>
@endsection
