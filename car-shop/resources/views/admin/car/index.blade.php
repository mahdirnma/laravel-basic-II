@extends('layout.app')
@section('title')
    cars
@endsection
@section('h1')
    خودروها
@endsection
@section('content')
    <table class="car-table">
        <caption>خودروها</caption>
        <thead>
        <tr>
            <th>حذف</th>
            <th>ویرایش</th>
            <th>قیمت</th>
            <th>نوع موتور</th>
            <th>تعداد سیلندر</th>
            <th>نوع خودرو</th>
            <th>برند</th>
            <th>نام</th>
            <th>id</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
        <tr>
            <td>
                <form action="{{route("deleteCar",["id"=>$car->id])}}" method="get">
                    @csrf
                    <input type="submit" value="حذف" class="remove">
                </form>
            </td>
            <td>
                <form action="{{route("updateCar",["id"=>$car->id])}}" method="get">
                    @csrf
                    <input type="submit" value="ویرایش" class="edit">
                </form>
            </td>
            <td>{{number_format($car->price)}}</td>
            @foreach($engines as $engine)
                @if($engine->id==$car->engine_id)
                    <td>{{$engine->title}}</td>
                @endif
            @endforeach
            <td>{{$car->cylinder}}</td>
            <td>{{$car->car_type}}</td>
            <td>
                @foreach($brands as $brand)
                    @if($brand->id==$car->brand_id)
                        {{$brand->title}}
                    @endif
                @endforeach
            </td>
            <td>{{$car->title}}</td>
            <td>{{$car->id}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('addCar')}}" class="add">افزودن خودرو</a>
@endsection
