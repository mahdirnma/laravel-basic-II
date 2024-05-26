@extends('layout.app')
@section('title')
    add professor
@endsection
@section('header')
    <h2>Add Professor</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex justify-center py-4">
        <form action="{{route("createProfessor")}}" method="post">
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
            <input type="text" name="national_code" id="national_code" class="border rounded-md border-violet-900 text-base px-2 py-1 mb-8"> : national_code
            <br>
            @if($errors->has("national_code"))
                @foreach($errors->get("national_code") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <select name="field" id="field" class="border rounded-md border-violet-900 text-base px-3 py-1">
                <option value="Elementary Education">Elementary Education</option>
                <option value="social Sciences">social Sciences</option>
                <option value="Psychology">Psychology</option>
                <option value="Arabic">Arabic</option>
            </select> : field
            <br>
            @if($errors->has("field"))
                @foreach($errors->get("field") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif

            <select name="degree" id="degree" class="border rounded-md border-violet-900 text-base px-3 py-1 mt-8">
                <option value="Bachelor's degree">Bachelor's degree</option>
                <option value="Master's degree">Master's degree</option>
                <option value="Doctorate">Doctorate</option>
            </select> : degree
            <br>
            @if($errors->has("field"))
                @foreach($errors->get("field") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif


            <div class="w-full flex justify-center mt-10">
                <input type="submit" value="ADD" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">
            </div>
        </form>
    </div>
@endsection
