@extends('layout.app')
@section('title')
    update category
@endsection
@section('content')
    <h1 style="text-align: center;font-size: 40px">افزودن دسته</h1>
    <form action="/admin/categories/{{$category->id}}/edit" method="post">
        @csrf
        @method("put")
        نام دسته : <input type="text" name="title" id="title" value="{{$category->title}}"><br>
        <input type="submit" value="update" style="margin-top: 25px;border: 1px solid #2d3748;color: #2d3748;background-color: transparent;cursor: pointer;width: 100px;height: 50px">
    </form>
    @if($errors->any)
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
