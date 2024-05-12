@extends('layout.app')
@section('title')
    update brand
@endsection
@section('h1')
    ویرایش برند
@endsection
@section('content')
    <form action="{{route('editBrand',["id"=>$brand->id])}}" method="post" class="add_form">
        @csrf
        @method("put")
        <input type="text" name="title" id="title" value="{{$brand->title}}"> : نام برند<br>
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
