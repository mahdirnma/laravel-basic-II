@extends('layout.app')
@section('title')
    delete engine
@endsection
@section('h1')
    حذف مدل موتور
@endsection
@section('content')
    <p class="question">آیا از حذف این مدل موتور اطمینان دارید؟</p>
    <form action="{{route('removeEngine')}}" method="post" class="add_form">
        @csrf
        @method("delete")
        <input type="text" name="title" id="title" value="{{$engine->title}}" disabled> : نام مدل موتور<br>
        <input type="hidden" name="id" value="{{$engine->id}}">
        <input type="submit" value="حذف">
    </form>
@endsection
