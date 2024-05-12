@extends('layout.app')
@section('title')
    brands
@endsection
@section('h1')
    برندها
@endsection
@section('content')
    <table class="car-table">
        <caption>برندها</caption>
        <thead>
        <tr>
            <th>حذف</th>
            <th>ویرایش</th>
            <th>نام برند</th>
            <th>id</th>
        </tr>
        </thead>
        <tbody>
        @foreach($brands as $brand)
        <tr>
            <td>
{{--
                <form action="{{route("deleteCar",["id"=>$car->id])}}" method="get">
                    @csrf
                    <input type="submit" value="حذف" class="remove">
                </form>
--}}
            </td>
            <td>
                <form action="{{route("updateBrand",["id"=>$brand->id])}}" method="get">
                    @csrf
                    <input type="submit" value="ویرایش" class="edit">
                </form>
            </td>
            <td>{{$brand->title}}</td>
            <td>{{$brand->id}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('addBrand')}}" class="add">افزودن برند</a>
@endsection
