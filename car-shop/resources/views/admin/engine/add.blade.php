@extends('layout.app')
@section('title')
    add engine
@endsection
@section('h1')
    افزودن موتور
@endsection
@section('content')
    <form action="{{route("createEngine")}}" method="post" class="add_form">
        @csrf
        <input type="text" name="title" id="title"> : مدل موتور<br>
        <input type="submit" value="اضافه کردن">
    </form>
    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
@endsection
