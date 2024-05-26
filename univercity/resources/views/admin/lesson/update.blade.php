@extends('layout.app')
@section('title')
    update lesson
@endsection
@section('header')
    <h2>Update Lesson</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex justify-center py-4">
        <form action="{{route("editLesson",["lesson"=>$lesson->id])}}" method="post">
            @csrf
            @method("put")
            <input type="text" name="title" value="{{$lesson->title}}" id="title" class="border rounded-md border-violet-900 text-base px-2 py-1"> : title
            <br>
            @if($errors->has("title"))
                @foreach($errors->get("title") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <input type="number" step="0.25" min="0.25" max="4" name="course" value="{{$lesson->course}}" id="course" class="border rounded-md border-violet-900 text-base px-2 py-1 my-8"> : course
            <br>
            @if($errors->has("course"))
                @foreach($errors->get("course") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <input type="number" name="capacity" value="{{$lesson->capacity}}" min="10" max="30" id="capacity" class="border rounded-md border-violet-900 text-base px-2 py-1 mb-8"> : capacity
            <br>
            @if($errors->has("capacity"))
                @foreach($errors->get("capacity") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <select name="professor" id="professor" class="border rounded-md border-violet-900 text-base px-3 py-1">
                @foreach($professors as $professor)
                    <option value="{{$professor->id}}" {{$professor->id==$lesson->professor_id?"selected":""}}>{{$professor->firstname}} {{$professor->lastname}}</option>
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
