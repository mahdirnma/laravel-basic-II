@extends('layout.app')
@section('title')
    trusts
@endsection

@section('search')
    <form action="{{route("writers.search")}}" method="get" class="w-9/12 h-full flex items-end justify-between pb-3">
        <label for="search"></label>
        <input type="search" name="search" id="search" placeholder="search" class="outline-0 pl-10 rounded-full w-7/12 h-14 bg-gray-100">
        <div class="h-full flex items-center pt-7">
            <label for="book_filter">book:</label>
            <select name="book_filter" id="book_filter" class="outline-0 bg-gray-100 ml-4 px-3 py-2  rounded-md text-gray-500 cursor-pointer">
                <option value="">...</option>
                @foreach($books as $book)
                    <option value="{{$book->id}}" class="bg-white text-black cursor-pointer">{{$book->title}}</option>
                @endforeach
            </select>
        </div>
    </form>
@endsection

@section('content')
    <div class="w-full h-1/6"></div>
    <div class="w-full h-auto flex justify-between">
        <h2 class="tracking-wide font-medium">ALL TRUSTS</h2>
        <a href="{{route("trusts.add")}}" class="w-[3vw] h-[3vw] rounded-full flex justify-center pt-1 text-[rgb(34,98,198)] font-bold text-2xl bg-violet-100">+</a>
    </div>
    <div class="max-h-96">
        <table class="w-full mt-10">
            <thead>
            <tr class="pb-10">
                <th class="font-mono text-base text-gray-400 text-left pb-7">id</th>
                <th class="font-mono text-base text-gray-400 pb-7">name</th>
                <th class="font-mono text-base text-gray-400 pb-7">borrow date</th>
                <th class="font-mono text-base text-gray-400 pb-7">giveBack date</th>
                <th class="font-mono text-base text-gray-400 pb-7">book</th>
                <th class="font-mono text-base text-gray-400 pb-7">update</th>
                <th class="font-mono text-base text-gray-400 pb-7">delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($trusts as $trust)
                <tr class="border-b">
                    <td class="py-2.5">{{$trust->id}}</td>
                    <td class="text-center py-2.5">{{$trust->firstname}} {{$trust->lastname}}</td>
                    <td class="text-center py-2.5">{{explode(" ",$trust->borrow_date)[0]}}</td>
                    <td class="text-center py-2.5">{{explode(" ",$trust->giveback_date)[0]}}</td>
                    <td class="text-center py-2.5">
                    @foreach($books as $book)
                            {{$trust->book_id==$book->id?$book->title:""}}
                    @endforeach
                    </td>
                    <td class="text-center py-2.5">
                        <form action="{{route("trusts.update",["trust"=>$trust->id])}}" method="get">
                            @csrf
                            <input type="submit" value="update" class="text-red-900 cursor-pointer transition-all hover:font-bold">
                        </form>
                    </td>
                    <td class="text-center py-2.5">
                        <form action="{{route("trusts.delete",["trust"=>$trust->id])}}" method="get">
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
