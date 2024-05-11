@extends('layout.app')
@section('title')
    add cars
@endsection
@section('h1')
    افزودن خودرو
@endsection
@section('content')
    <form action="{{route("createCar")}}" method="post" class="add_form">
        @csrf
        <input type="text" name="title" id="title"> : نام خودرو<br>
        <select name="brand_id">
            @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->title}}</option>
            @endforeach
        </select> : برند خودرو<br>
        <select name="car_type">
            <option value="sedan">sedan</option>
            <option value="hatchBack">hatchBack</option>
            <option value="crossOver">crossOver</option>
            <option value="pickUp">pickUp</option>
        </select> : نوع خودرو<br>
        <div>
            <label for="l3">l3</label>
            <input type="radio" name="cylinder" id="l3" value="l3">
            <label for="l4">l4</label>
            <input type="radio" name="cylinder" id="l4" value="l4">
            <label for="v6">v6</label>
            <input type="radio" name="cylinder" id="v6" value="v6">
            <label for="v8">v8</label>
            <input type="radio" name="cylinder" id="v8" value="v8">
            : تعداد سیلندر</div><br>
        <select name="engine_id">
            @foreach($engines as $engine)
                <option value="{{$engine->id}}">{{$engine->title}}</option>
            @endforeach
        </select> : موتور خودرو<br>
        <input type="text" name="price" id="price"> : قیمت خودرو<br>
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
