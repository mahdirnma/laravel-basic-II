@extends('layout.app')
@section('title')
    food
@endsection
@section('content')
    <h1 style="text-align: center;font-size: 40px">غذاها</h1>
    <a href="/admin/foods/add" style="text-decoration: none;color: darkred;text-align: center;padding: 15px;border: 2px solid darkred;border-radius: 5px;font-weight: bold">افزودن غذا</a>
    <table border="1" style="margin-top: 25px">
        <thead>
        <tr>
            <th>حذف</th>
            <th>ویرایش</th>
            <th>موجودی</th>
            <th>قیمت</th>
            <th>دسته بندی غذا</th>
            <th>نوع غذا</th>
            <th>نام غذا</th>
            <th>شماره</th>
        </tr>
        </thead>
        <tbody>
        @foreach($foods as $food)
            <tr>
                <td style="padding: 15px;text-align: center">
                    <form action="/admin/foods/{{$food->id}}/delete" method="get">
                        @csrf
                        <input type="submit" value="delete" style="background-color: transparent;border: 1px solid #09196b;color: #09196b;border-radius: 3px;cursor: pointer;padding: 5px">
                    </form>
                </td>
                <td style="padding: 10px;text-align: center">
                    <form action="/admin/foods/{{$food->id}}/update" method="get">
                        @csrf
                        <input type="submit" value="update" style="background-color: transparent;border: 1px solid #6b0909;color: #6b0909;border-radius: 3px;cursor: pointer;padding: 5px">
                    </form>
                </td>
                <td style="padding: 15px;text-align: center">{{$food->entity}}</td>
                <td style="padding: 15px;text-align: center">
                    {{number_format($food->price)}}
                    <form action="/admin/foods/{{$food->id}}/priceUpdate" method="get">
                        @csrf
                        <input type="submit" value="price update" style="background-color: transparent;border: 1px solid #6b0909;color: #6b0909;border-radius: 3px;cursor: pointer;padding: 5px">
                    </form>
                </td>
                <td style="padding: 15px;text-align: center">
                    @foreach($categories as $category)
                        {{$category->id==$food->category_id?$category->title:""}}
                    @endforeach
                </td>
                <td style="padding: 15px;text-align: center">{{$food->food_type}}</td>
                <td style="padding: 15px;text-align: center">{{$food->title}}</td>
                <td style="padding: 15px;text-align: center">{{$food->id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
