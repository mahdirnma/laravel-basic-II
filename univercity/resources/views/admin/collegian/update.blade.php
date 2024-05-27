@extends('layout.app')
@section('title')
    update collegian
@endsection
@section('header')
    <h2>Update Collegian</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex justify-center py-4">
        <form action="{{route("editCollegian",["collegian"=>$collegian->id])}}" method="post">
            @csrf
            @method("put")
            <select name="student" id="student" class="border rounded-md border-violet-900 text-base px-3 py-1">
                @foreach($students as $student)
                    <option value="{{$student->id}}" {{$collegian->student_id==$student->id?"selected":""}}>{{$student->firstname}} {{$student->lastname}}</option>
                @endforeach
            </select> : student
            <br>
            @if($errors->has("student"))
                @foreach($errors->get("student") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <select name="lesson" id="lesson" class="border rounded-md border-violet-900 text-base px-3 py-1 my-8">
                @foreach($lessons as $lesson)
                    <option value="{{$lesson->id}}" {{$collegian->lesson_id==$lesson->id?"selected":""}}>{{$lesson->title}}</option>
                @endforeach
            </select> : lesson
            <br>
            @if($errors->has("lesson"))
                @foreach($errors->get("lesson") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <select name="professor" id="professor" class="border rounded-md border-violet-900 text-base px-3 py-1">
                @foreach($professors as $professor)
                    <option value="{{$professor->id}}" {{$collegian->professor_id==$professor->id?"selected":""}}>{{$professor->firstname}} {{$professor->lastname}}</option>
                @endforeach
            </select> : professor
            <br>
            @if($errors->has("professor"))
                @foreach($errors->get("professor") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <div class="w-full flex justify-center mt-10">
                <input type="submit" value="UPDATE" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">
            </div>
        </form>
    </div>
@endsection
