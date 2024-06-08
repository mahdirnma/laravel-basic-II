@extends('layout.app')
@section('title')
    books
@endsection
@section('content')
    <div class="w-full h-1/6"></div>
    <h2 class="tracking-wide font-medium">ALL BOOKS</h2>
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
                <tr>
                    <td>{{$book->id}}</td>
                    <td class="text-center">{{$book->title}}</td>
                    <td class="text-center">{{explode(" ",$book->release_date)[0]}}</td>
                    <td class="text-center">{{$book->pages}}</td>
                    @foreach($writers as $writer)
                        <td class="text-center">
                            {{$writer->id==$book->writer_id?$writer->firstname." ".$writer->lastname:""}}
                        </td>
                    @endforeach
                    @foreach($categories as $category)
                        <td class="text-center">
                            {{$category->id==$book->category_id?$category->title:""}}
                        </td>
                    @endforeach
                    <td class="text-center">update</td>
                    <td class="text-center">delete</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
