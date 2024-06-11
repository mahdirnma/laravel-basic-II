@extends('layout.app')
@section('title')
    writers
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
        <h2 class="tracking-wide font-medium">ALL WRITERS</h2>
        <a href="{{route("writers.add")}}" class="w-[3vw] h-[3vw] rounded-full flex justify-center pt-1 text-[rgb(34,98,198)] font-bold text-2xl bg-violet-100">+</a>
    </div>
    <div class="max-h-96">
        <table class="w-full mt-10">
            <thead>
            <tr class="pb-10">
                <th class="font-mono text-base text-gray-400 text-left pb-7">id</th>
                <th class="font-mono text-base text-gray-400 pb-7">name</th>
                <th class="font-mono text-base text-gray-400 pb-7">birth date</th>
                <th class="font-mono text-base text-gray-400 pb-7">biography</th>
                <th class="font-mono text-base text-gray-400 pb-7">books</th>
                <th class="font-mono text-base text-gray-400 pb-7">update</th>
                <th class="font-mono text-base text-gray-400 pb-7">delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($writers as $writer)
                <tr class="border-b">
                    <td class="py-2.5">{{$writer->id}}</td>
                    <td class="text-center py-2.5">{{$writer->firstname}} {{$writer->lastname}}</td>
                    <td class="text-center py-2.5">{{explode(" ",$writer->birth_date)[0]}}</td>
                    <td class="text-center py-2.5">{{$writer->biography}}</td>
                    <td class="text-center py-2.5">
                    @foreach($books as $book)
                        @foreach(explode(",",$writer->books_id) as $row)
                                {{$row==$book->id?$book->title:""}}
                            @endforeach
                    @endforeach
                    </td>
                    <td class="text-center py-2.5">
                        <form action="{{route("writers.update",["writer"=>$writer->id])}}" method="get">
                            @csrf
                            <input type="submit" value="update" class="text-red-900 cursor-pointer transition-all hover:font-bold">
                        </form>
                    </td>
                    <td class="text-center py-2.5">
                        <form action="{{route("writers.delete",["writer"=>$writer->id])}}" method="get">
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
