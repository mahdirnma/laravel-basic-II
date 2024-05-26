@extends('layout.app')
@section('title')
    lessons
@endsection
@section('header')
    <h2>Lessons</h2>
    <div class="w-11/12 h-full flex justify-end items-center">
        <a href="{{route("addLesson")}}" class="text-lg border-2 rounded-lg border-violet-900 font-medium p-2 hover:text-gray-500">add lesson</a>
    </div>
@endsection
@section('content')
    <div class="w-full flex items-center justify-center px-10">
        <table class="w-full">
            <thead>
            <tr class="h-20 border-b border-neutral-400">
                <th class="text-left ">id</th>
                <th>title</th>
                <th>course</th>
                <th>capacity</th>
                <th>professor</th>
                <th>update</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lessons as $lesson)
            <tr class="w-96 h-20 border-b border-neutral-200">
                <td class="text-left">{{$lesson->id}}</td>
                <td class="text-center">{{$lesson->title}}</td>
                <td class="text-center">{{$lesson->course}}</td>
                <td class="text-center">{{$lesson->capacity}}</td>
                <td class="text-center">
                    @foreach($professors as $professor)
                        {{$professor->id==$lesson->professor_id?$professor->firstname." ".$professor->lastname:""}}
                    @endforeach
                </td>
                <td class="text-center">
                    <form action="{{route("updateLesson",["lesson"=>$lesson->id])}}" method="get">
                        <input type="submit" value="update" class="cursor-pointer text-red-900 hover:font-bold">
                    </form>
                </td>
                <td class="text-center">
                    <form action="{{--{{route("deleteProfessor",["professor"=>$professor->id])}}--}}" method="get">
                        <input type="submit" value="delete" class="cursor-pointer text-amber-700 hover:font-bold">
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
