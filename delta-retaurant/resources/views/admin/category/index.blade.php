@extends('layout.app')
@section('title')
    category
@endsection
@section('content')
    <h1 style="text-align: center;font-size: 40px">دسته بندی غذاها</h1>
    <a href="/admin/categories/add" style="text-decoration: none;color: darkred;text-align: center;padding: 15px;border: 2px solid darkred;border-radius: 5px;font-weight: bold">افزودن دسته</a>
    <table border="1" style="margin-top: 25px">
        <thead>
        <tr>
            <th>حذف</th>
            <th>ویرایش</th>
            <th>نام دسته</th>
            <th>شماره</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td style="padding: 15px;text-align: center">
                    <form action="/admin/categories/{{$category->id}}/delete" method="get">
                        @csrf
                        <input type="submit" value="delete" style="background-color: transparent;border: 1px solid #09196b;color: #09196b;border-radius: 3px;cursor: pointer;padding: 5px">
                    </form>
                </td>
                <td style="padding: 10px;text-align: center">
                    <form action="/admin/categories/{{$category->id}}/update" method="get">
                        @csrf
                        <input type="submit" value="update" style="background-color: transparent;border: 1px solid #6b0909;color: #6b0909;border-radius: 3px;cursor: pointer;padding: 5px">
                    </form>
                </td>
                <td style="padding: 15px;text-align: center">{{$category->title}}</td>
                <td style="padding: 15px;text-align: center">{{$category->id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
