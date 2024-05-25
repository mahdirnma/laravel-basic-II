@extends('layout.app')
@section('title')
    update student
@endsection
@section('header')
    <h2>Update Student</h2>
@endsection
@section('content')
    <div class="w-full h-5/6 flex justify-center py-4">
        <form action="{{route("editStudent",["student"=>$student->id])}}" method="post">
            @csrf
            @method("put")
            <input type="text" name="firstname" id="firstname" value="{{$student->firstname}}" class="border rounded-md border-violet-900 text-base px-2 py-1"> : firstname
            <br>
            @if($errors->has("firstname"))
                @foreach($errors->get("firstname") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <input type="text" name="lastname" id="lastname" value="{{$student->lastname}}" class="border rounded-md border-violet-900 text-base px-2 py-1 my-8"> : lastname
            <br>
            @if($errors->has("lastname"))
                @foreach($errors->get("lastname") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <input type="text" name="national_code" id="national_code" value="{{$student->national_code}}" class="border rounded-md border-violet-900 text-base px-2 py-1 mb-8"> : national_code
            <br>
            @if($errors->has("national_code"))
                @foreach($errors->get("national_code") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <select name="field" id="field" class="border rounded-md border-violet-900 text-base px-3 py-1">
                <option value="Elementary Education" {{$student->field=='Elementary Education'?'selected':''}}>Elementary Education</option>
                <option value="social Sciences" {{$student->field=='social Sciences'?'selected':''}}>social Sciences</option>
            </select> : field
            <br>
            @if($errors->has("field"))
                @foreach($errors->get("field") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <div class="w-72 flex justify-end items-center mt-8 pr-3">
                <select name="semester" id="semester" class="border rounded-md border-violet-900 text-base px-3 py-1 text-right mr-1">
                    <option value="1" {{$student->semester==1?'selected':''}}>1</option>
                    <option value="2" {{$student->semester==2?'selected':''}}>2</option>
                    <option value="3" {{$student->semester==3?'selected':''}}>3</option>
                    <option value="4" {{$student->semester==4?'selected':''}}>4</option>
                    <option value="5" {{$student->semester==5?'selected':''}}>5</option>
                    <option value="6" {{$student->semester==6?'selected':''}}>6</option>
                    <option value="7" {{$student->semester==7?'selected':''}}>7</option>
                    <option value="8" {{$student->semester==8?'selected':''}}>8</option>
                </select> : semester
            </div>
            @if($errors->has("semester"))
                @foreach($errors->get("semester") as $err)
                    <p class="text-red-900">{{$err}}</p>
                @endforeach
            @endif
            <div class="w-full flex justify-center mt-10">
                <input type="submit" value="UPDATE" class="cursor-pointer text-white bg-violet-950 rounded px-4 py-3 hover:bg-white hover:text-violet-950 border border-violet-900">
            </div>
        </form>
    </div>
@endsection
