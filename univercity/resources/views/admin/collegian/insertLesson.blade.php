@extends('layout.app')
@section('title')
    add collegian
@endsection
@section('header')
    <h2>Add Collegian</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex justify-center py-4">
        <form action="{{route("insertProfessor")}}" method="get">
            @csrf
            <select name="lesson" id="lesson" class="border rounded-md border-violet-900 text-base px-3 py-1 my-8">
                @foreach($lessons as $lesson)
                    <option value="{{$lesson}}">{{$lesson}}</option>
                @endforeach
            </select> : lesson
            <br>
            @if($errors->has("lesson"))
                @foreach($errors->get("lesson") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <input type="hidden" name="student" value="{{$student_id}}">
            <div class="w-full flex justify-center mt-10">
                <input type="submit" value="SELECT LESSON" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">
            </div>
        </form>
    </div>
@endsection
