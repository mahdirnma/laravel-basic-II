@extends('layout.app')
@section('title')
    delete cars
@endsection
@section('h1')
    حذف خودرو
@endsection
@section('content')
    <p class="question">آیا از حذف این خودرو اطمینان دارید؟</p>
    <form action="{{route('removeCar')}}" method="post" class="add_form">
        @csrf
        @method("delete")
        <input type="text" name="title" id="title" value="{{$car->title}}" disabled> : نام خودرو<br>
        <input type="text" name="price" id="price" value="{{$car->price}}" disabled> : قیمت خودرو<br>
        <input type="hidden" name="id" value="{{$car->id}}">
        <input type="submit" value="حذف">
    </form>
@endsection
