@extends('layout.app')
@section('title')
    professors
@endsection
@section('header')
    <h2>Professors</h2>
    <div class="w-11/12 h-full flex justify-end items-center">
        <a href="{{route("addProfessor")}}" class="text-lg border-2 rounded-lg border-violet-900 font-medium p-2 hover:text-gray-500">add professor</a>
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
                <th>degree</th>
                <th>update</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($professors as $professor)
            <tr class="w-96 h-20 border-b border-neutral-200">
                <td class="text-left">{{$professor->id}}</td>
                <td class="text-center">{{$professor->firstname}} {{$professor->lastname}}</td>
                <td class="text-center">{{$professor->national_code}}</td>
                <td class="text-center">{{$professor->field}}</td>
                <td class="text-center">{{$professor->degree}}</td>
                <td class="text-center">
{{--                    <form action="{{route("updateProfessor",["professor"=>$professor->id])}}" method="get">--}}
{{--                        <input type="submit" value="update" class="cursor-pointer text-red-900 hover:font-bold">--}}
{{--                    </form>--}}
                </td>
                <td class="text-center">
{{--                    <form action="{{route("deleteProfessor",["professor"=>$professor->id])}}" method="get">--}}
{{--                        <input type="submit" value="delete" class="cursor-pointer text-amber-700 hover:font-bold">--}}
{{--                    </form>--}}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
