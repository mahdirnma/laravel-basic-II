@extends('layout.app')
@section('title')
    food
@endsection
@section('content')
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
                <td style="padding: 15px;text-align: center">delete</td>
                <td style="padding: 15px;text-align: center">edit</td>
                <td style="padding: 15px;text-align: center">{{$food->entity}}</td>
                <td style="padding: 15px;text-align: center">{{number_format($food->price)}}</td>
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
