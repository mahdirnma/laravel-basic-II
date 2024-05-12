@extends('layout.app')
@section('title')
    delete brand
@endsection
@section('h1')
    حذف برند
@endsection
@section('content')
    <p class="question">آیا از حذف این برند اطمینان دارید؟</p>
    <form action="{{route('removeBrand')}}" method="post" class="add_form">
        @csrf
        @method("delete")
        <input type="text" name="title" id="title" value="{{$brand->title}}" disabled> : نام برند<br>
        <input type="hidden" name="id" value="{{$brand->id}}">
        <input type="submit" value="حذف">
    </form>
@endsection
