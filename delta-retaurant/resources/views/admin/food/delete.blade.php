@extends('layout.app')
@section('title')
    delete
@endsection
@section('content')
    <h1 style="text-align: center;font-size: 40px">حذف غذا</h1>
    <h3>آیا از حذف این غذا اطمینان دارید؟</h3>
    <span style="color: #6b0909;font-size: 20px">{{$food->title}}</span>
    <form action="/admin/foods/remove" method="post">
        @csrf
        @method("delete")
        <input type="hidden" name="id" value="{{$food->id}}">
        <input type="submit" value="delete" style="background-color: transparent;border: 2px solid #6b0909;color: #6b0909;border-radius: 3px;cursor: pointer;padding: 5px;margin-top: 25px;font-size: 20px">
    </form>
@endsection
