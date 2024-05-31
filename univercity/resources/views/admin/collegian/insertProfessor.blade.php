@extends('layout.app')
@section('title')
    add collegian
@endsection
@section('header')
    <h2>Add Collegian</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex justify-center py-4">
        <form action="{{route("createCollegian")}}" method="post">
            @csrf
            <select name="professor" id="professor" class="border rounded-md border-violet-900 text-base px-3 py-1">
                @foreach($professors as $professor)
                    <option value="{{$professor->id}}">{{$professor->firstname}} {{$professor->lastname}}</option>
                @endforeach
            </select> : professor
            <br>
            @if($errors->has("professor"))
                @foreach($errors->get("professor") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <input type="hidden" name="student" value="{{$student_id}}">
            <input type="hidden" name="lesson" value="{{$lesson_title}}">
            <div class="w-full flex justify-center mt-10">
                <input type="submit" value="ADD COLLEGIAN" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">
            </div>
        </form>
    </div>
@endsection
