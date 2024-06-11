@extends('layout.app')
@section('title')
    categories
@endsection
@section('search')
    <form action="{{route("categories.search")}}" method="get" class="w-9/12 h-full flex items-end justify-between pb-3">
        <label for="search"></label>
        <input type="search" name="search" id="search" placeholder="search" class="outline-0 pl-10 rounded-full w-7/12 h-14 bg-gray-100">
    </form>
@endsection

@section('content')
    <div class="w-full h-1/6"></div>
    <div class="w-full h-auto flex justify-between">
        <h2 class="tracking-wide font-medium">ALL CATEGORIES</h2>
        <a href="{{route("categories.add")}}" class="w-[3vw] h-[3vw] rounded-full flex justify-center pt-1 text-[rgb(34,98,198)] font-bold text-2xl bg-violet-100">+</a>
    </div>
    <div class="max-h-96">
        <table class="w-full mt-10">
            <thead>
            <tr class="pb-10">
                <th class="font-mono text-base text-gray-400 text-left pb-7">id</th>
                <th class="font-mono text-base text-gray-400 pb-7">title</th>
                <th class="font-mono text-base text-gray-400 pb-7">update</th>
                <th class="font-mono text-base text-gray-400 pb-7">delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr class="border-b">
                    <td class="py-2.5">{{$category->id}}</td>
                    <td class="text-center py-2.5">{{$category->title}}</td>
                    <td class="text-center py-2.5">
                        <form action="{{route("categories.update",["category"=>$category->id])}}" method="get">
                            @csrf
                            <input type="submit" value="update" class="text-red-900 cursor-pointer transition-all hover:font-bold">
                        </form>
                    </td>
                    <td class="text-center py-2.5">
                        <form action="{{route("categories.delete",["category"=>$category->id])}}" method="get">
                            @csrf
                            <input type="submit" value="delete" class="text-red-900 cursor-pointer transition-all hover:font-bold">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
