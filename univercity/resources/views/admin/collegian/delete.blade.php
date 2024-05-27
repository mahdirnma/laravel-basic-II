@extends('layout.app')
@section('title')
    delete collegian
@endsection
@section('header')
    <h2>Delete Collegian</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex flex-col items-center justify-around">
        <p class="text-red-900 text-2xl font-bold">Are you sure about deleting the lesson for this student?</p>
        <div class="flex flex-col items-center">
            <p class="text-2xl mb-8">student name :
                @foreach($students as $student)
                    {{$student->id==$collegian->student_id?$student->firstname." ".$student->lastname:""}}
                @endforeach
            </p>
            <p class="text-2xl">lesson :
            @foreach($lessons as $lesson)
                    {{$lesson->id==$collegian->lesson_id?$lesson->title:""}}
            @endforeach
            </p>
            <p class="text-2xl">professor :
            @foreach($professors as $professor)
                    {{$professor->id==$collegian->professor_id?$professor->firstname." ".$professor->lastname:""}}
            @endforeach
            </p>
        </div>
        <form action="{{route("removeCollegian")}}" method="post">
            @csrf
            @method("delete")
            <input type="hidden" name="id" value="{{$collegian->id}}">
            <input type="submit" value="delete" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">;
        </form>

    </div>
@endsection
