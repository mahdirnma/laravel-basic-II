@extends('layout.app')
@section('title')
    students
@endsection
@section('titre')
    Students
@endsection
@section('content')
    <div class="w-full flex items-center justify-center px-10">
        <table class="w-full max-h-full">
            <thead>
            <tr class="h-20 border-b border-neutral-400">
                <th class="text-left ">Name</th>
                <th>field</th>
                <th>semester</th>
                <th>update</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
            <tr class="w-96 h-20 border-b border-neutral-200">
                <td class="text-left">{{$student->firstname}} {{$student->lastname}}</td>
                <td class="text-center">{{$student->field}}</td>
                <td class="text-center">{{$student->semester}}</td>
                <td class="text-center">update</td>
                <td class="text-center">delete</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
