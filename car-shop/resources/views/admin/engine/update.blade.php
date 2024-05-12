@extends('layout.app')
@section('title')
    update engine
@endsection
@section('h1')
    ویرایش مدل موتور
@endsection
@section('content')
    <form action="{{route('editEngine',["id"=>$engine->id])}}" method="post" class="add_form">
        @csrf
        @method("put")
        <input type="text" name="title" id="title" value="{{$engine->title}}"> : نام مدل موتور<br>
        <input type="submit" value="ویرایش کردن">
    </form>
    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
@endsection
