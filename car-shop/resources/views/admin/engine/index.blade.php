@extends('layout.app')
@section('title')
    engines
@endsection
@section('h1')
    موتورها
@endsection
@section('content')
    <table class="car-table">
        <caption>موتورها</caption>
        <thead>
        <tr>
            <th>حذف</th>
            <th>ویرایش</th>
            <th>مدل موتور</th>
            <th>id</th>
        </tr>
        </thead>
        <tbody>
        @foreach($engines as $engine)
        <tr>
            <td>
{{--                <form action="{{route("deleteBrand",["id"=>$engine->id])}}" method="get">--}}
{{--                    @csrf--}}
{{--                    <input type="submit" value="حذف" class="remove">--}}
{{--                </form>--}}
            </td>
            <td>
{{--                <form action="{{route("updateBrand",["id"=>$engine->id])}}" method="get">--}}
{{--                    @csrf--}}
{{--                    <input type="submit" value="ویرایش" class="edit">--}}
{{--                </form>--}}
            </td>
            <td>{{$engine->title}}</td>
            <td>{{$engine->id}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('addEngine')}}" class="add">افزودن موتور</a>
@endsection
