@extends('layout.app')
@section('title')
    add student
@endsection
@section('header')
    <h2>Add Student</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex justify-center py-4">
        <form action="{{route("createStudent")}}" method="post">
            @csrf
            <input type="text" name="firstname" id="firstname" class="border rounded-md border-violet-900 text-base px-2 py-1"> : firstname
            <br>
            @if($errors->has("firstname"))
                @foreach($errors->get("firstname") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <input type="text" name="lastname" id="lastname" class="border rounded-md border-violet-900 text-base px-2 py-1 my-8"> : lastname
            <br>
            @if($errors->has("lastname"))
                @foreach($errors->get("lastname") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <select name="field" id="field" class="border rounded-md border-violet-900 text-base px-3 py-1">
                <option value="Elementary Education">Elementary Education</option>
                <option value="social Sciences">social Sciences</option>
            </select> : field
            <br>
            @if($errors->has("field"))
                @foreach($errors->get("field") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <div class="w-full flex justify-end items-center mt-8">
                <select name="semester" id="semester" class="border rounded-md border-violet-900 text-base px-3 py-1 text-right mr-1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select> : semester
            </div>
            @if($errors->has("semester"))
                @foreach($errors->get("semester") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <div class="w-full flex justify-center mt-10">
                <input type="submit" value="ADD" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">
            </div>
        </form>
    </div>
@endsection
