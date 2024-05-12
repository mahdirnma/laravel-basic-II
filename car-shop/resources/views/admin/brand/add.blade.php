@extends('layout.app')
@section('title')
    add brand
@endsection
@section('h1')
    افزودن برند
@endsection
@section('content')
    <form action="{{route("createBrand")}}" method="post" class="add_form">
        @csrf
        <input type="text" name="title" id="title"> : نام برند<br>
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
