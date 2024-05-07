@extends('layout.app')
@section('title')
    update food
@endsection
@section('content')
    <h1 style="text-align: center;font-size: 40px">ویرایش موجودی غذا</h1>
    <form action="/admin/foods/{{$food->id}}/entityEdit" method="post">
        @csrf
        @method("put")
        نام غذا : <input type="text" name="title" id="title" value="{{$food->title}}" disabled><br>
        موجودی غذا : <select name="entity" style="margin-top: 25px">
            <option value="yes" {{$food->entity=="yes"?"selected":""}}>yes</option>
            <option value="no" {{$food->entity=="no"?"selected":""}}>no</option>
        </select><br>
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
