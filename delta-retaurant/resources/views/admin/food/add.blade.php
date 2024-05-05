@extends('layout.app')
@section('title')
    add food
@endsection
@section('content')
    <form action="/admin/foods/create" method="post">
        @csrf
        نام غذا : <input type="text" name="title" id="title"><br>
        نوع غذا : <select name="food_type" style="margin-top: 25px">
            <option value="normal">normal</option>
            <option value="vegan">vegan</option>
        </select><br>
        دسته بندی غذا : <select name="category_id" style="margin-top: 25px">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select><br>
        قیمت غذا : <input type="number" name="price" id="price" style="margin-top: 25px"><br>
        موجودی غذا : <select name="entity" style="margin-top: 25px">
            <option value="yes">yes</option>
            <option value="no">no</option>
        </select><br>
        <input type="submit" value="add" style="margin-top: 25px;border: 1px solid #2d3748;color: #2d3748;background-color: transparent;cursor: pointer;width: 100px;height: 50px">
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
