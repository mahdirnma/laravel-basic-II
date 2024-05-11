@extends('layout.app')
@section('title')
    update cars
@endsection
@section('h1')
    ویرایش خودرو
@endsection
@section('content')
    <form action="{{route('editCar',["id"=>$car->id])}}" method="post" class="add_form">
        @csrf
        @method("put")
        <input type="text" name="title" id="title" value="{{$car->title}}"> : نام خودرو<br>
        <select name="brand_id">
            @foreach($brands as $brand)
                <option value="{{$brand->id}}" {{$car->brand_id==$brand->id?"selected":""}}>{{$brand->title}}</option>
            @endforeach
        </select> : برند خودرو<br>
        <select name="car_type">
            <option value="sedan" {{$car->car_type=="sedan"?"selected":""}}>sedan</option>
            <option value="hatchBack" {{$car->car_type=="hatchBack"?"selected":""}}>hatchBack</option>
            <option value="crossOver" {{$car->car_type=="crossOver"?"selected":""}}>crossOver</option>
            <option value="pickUp" {{$car->car_type=="pickUp"?"selected":""}}>pickUp</option>
        </select> : نوع خودرو<br>
        <div>
            <label for="l3">l3</label>
            <input type="radio" name="cylinder" id="l3" value="l3" {{$car->cylinder=="l3"?"checked":""}}>
            <label for="l4">l4</label>
            <input type="radio" name="cylinder" id="l4" value="l4" {{$car->cylinder=="l4"?"checked":""}}>
            <label for="v6">v6</label>
            <input type="radio" name="cylinder" id="v6" value="v6" {{$car->cylinder=="v6"?"checked":""}}>
            <label for="v8">v8</label>
            <input type="radio" name="cylinder" id="v8" value="v8" {{$car->cylinder=="v8"?"checked":""}}>
            : تعداد سیلندر</div><br>
        <select name="engine_id">
            @foreach($engines as $engine)
                <option value="{{$engine->id}}" {{$car->engine_id==$engine->id?"selected":""}}>{{$engine->title}}</option>
            @endforeach
        </select> : موتور خودرو<br>
        <input type="text" name="price" id="price" value="{{$car->price}}"> : قیمت خودرو<br>
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
