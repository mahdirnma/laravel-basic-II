@extends('layout.app')
@section('title')
    books
@endsection
@section('content')
    <div class="w-full h-1/6"></div>
    <div class="w-full h-auto flex justify-between">
        <h2 class="tracking-wide font-medium">ALL BOOKS</h2>
        <a href="{{route("books.add")}}" class="w-[3vw] h-[3vw] rounded-full flex justify-center pt-1 text-[rgb(34,98,198)] font-bold text-2xl bg-violet-100">+</a>
    </div>
    <div class="max-h-96">
        <table class="w-full mt-10">
            <thead>
            <tr class="pb-10">
                <th class="font-mono text-base text-gray-400 text-left pb-7">id</th>
                <th class="font-mono text-base text-gray-400 pb-7">title</th>
                <th class="font-mono text-base text-gray-400 pb-7">release date</th>
                <th class="font-mono text-base text-gray-400 pb-7">pages</th>
                <th class="font-mono text-base text-gray-400 pb-7">writer</th>
                <th class="font-mono text-base text-gray-400 pb-7">category</th>
                <th class="font-mono text-base text-gray-400 pb-7">update</th>
                <th class="font-mono text-base text-gray-400 pb-7">delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr class="border-b">
                    <td class="py-2.5">{{$book->id}}</td>
                    <td class="text-center py-2.5">{{$book->title}}</td>
                    <td class="text-center py-2.5">{{explode(" ",$book->release_date)[0]}}</td>
                    <td class="text-center py-2.5">{{$book->pages}}</td>
                    <td class="text-center py-2.5">
                    @foreach($writers as $writer)
                            {{$writer->id==$book->writer_id?$writer->firstname." ".$writer->lastname:""}}
                    @endforeach
                    </td>
                    <td class="text-center py-2.5">
                    @foreach($categories as $category)
                            {{$category->id==$book->category_id?$category->title:""}}
                    @endforeach
                    </td>
                    <td class="text-center py-2.5">
                        <form action="{{route("books.update",["book"=>$book->id])}}" method="get">
                            @csrf
                            <input type="submit" value="update" class="text-red-900 cursor-pointer transition-all hover:font-bold">
                        </form>
                    </td>
                    <td class="text-center py-2.5">
                        <form action="{{route("books.delete",["book"=>$book->id])}}" method="get">
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
