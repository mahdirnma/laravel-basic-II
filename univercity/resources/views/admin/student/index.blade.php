@extends('layout.app')
@section('title')
    students
@endsection
@section('header')
    <h2>Students</h2>
    <div class="w-11/12 h-full flex justify-end items-center">
        <a href="{{route("addStudent")}}" class="text-lg border-2 rounded-lg border-violet-900 font-medium p-2 hover:text-gray-500">add student</a>
    </div>
@endsection
@section('content')
    <div class="w-full flex items-center justify-center px-10">
        <table class="w-full">
            <thead>
            <tr class="h-20 border-b border-neutral-400">
                <th class="text-left ">id</th>
                <th>Name</th>
                <th>national code</th>
                <th>field</th>
                <th>semester</th>
                <th>update</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
            <tr class="w-96 h-20 border-b border-neutral-200">
                <td class="text-left">{{$student->id}}</td>
                <td class="text-center">{{$student->firstname}} {{$student->lastname}}</td>
                <td class="text-center">{{$student->national_code}}</td>
                <td class="text-center">{{$student->field}}</td>
                <td class="text-center">{{$student->semester}}</td>
                <td class="text-center">
                    <form action="{{route("updateStudent",["student"=>$student->id])}}" method="get">
                        <input type="submit" value="update" class="cursor-pointer text-red-900 hover:font-bold">
                    </form>
                </td>
                <td class="text-center">
                    <form action="{{route("deleteStudent",["student"=>$student->id])}}" method="get">
                        <input type="submit" value="delete" class="cursor-pointer text-amber-700 hover:font-bold">
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
