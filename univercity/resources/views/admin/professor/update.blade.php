@extends('layout.app')
@section('title')
    update professor
@endsection
@section('header')
    <h2>Update Professor</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex justify-center py-4">
        <form action="{{route("editProfessor",["professor"=>$professor->id])}}" method="post">
            @csrf
            @method("put")
            <input type="text" name="firstname" value="{{$professor->firstname}}" id="firstname" class="border rounded-md border-violet-900 text-base px-2 py-1"> : firstname
            <br>
            @if($errors->has("firstname"))
                @foreach($errors->get("firstname") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <input type="text" name="lastname"  value="{{$professor->lastname}}" id="lastname" class="border rounded-md border-violet-900 text-base px-2 py-1 my-8"> : lastname
            <br>
            @if($errors->has("lastname"))
                @foreach($errors->get("lastname") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <input type="text" name="national_code"  value="{{$professor->national_code}}" id="national_code" class="border rounded-md border-violet-900 text-base px-2 py-1 mb-8"> : national_code
            <br>
            @if($errors->has("national_code"))
                @foreach($errors->get("national_code") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <select name="field" id="field" class="border rounded-md border-violet-900 text-base px-3 py-1">
                <option value="Elementary Education" {{$professor->field=="Elementary Education"?"selected":""}}>Elementary Education</option>
                <option value="social Sciences" {{$professor->field=="social Sciences"?"selected":""}}>social Sciences</option>
                <option value="Psychology" {{$professor->field=="Psychology"?"selected":""}}>Psychology</option>
                <option value="Arabic" {{$professor->field=="Arabic"?"selected":""}}>Arabic</option>
            </select> : field
            <br>
            @if($errors->has("field"))
                @foreach($errors->get("field") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif

            <select name="degree" id="degree" class="border rounded-md border-violet-900 text-base px-3 py-1 mt-8">
                <option value="Bachelor's degree" {{$professor->degree=="Bachelor's degree"?"selected":""}}>Bachelor's degree</option>
                <option value="Master's degree" {{$professor->degree=="Master's degree"?"selected":""}}>Master's degree</option>
                <option value="Doctorate" {{$professor->degree=="Doctorate"?"selected":""}}>Doctorate</option>
            </select> : degree
            <br>
            @if($errors->has("field"))
                @foreach($errors->get("field") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif


            <div class="w-full flex justify-center mt-10">
                <input type="submit" value="UPDATE" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">
            </div>
        </form>
    </div>
@endsection
