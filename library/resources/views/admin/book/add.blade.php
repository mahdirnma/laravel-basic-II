@extends('layout.app')
@section('title')
    add book
@endsection
@section('content')
    <form action="{{route("books.create")}}" method="post" class="w-full h-full flex flex-col items-center">
        @csrf
        <div class="min-w-80 flex justify-start items-center">
            <label for="title" class="mr-4 font-bold">title :</label>
            <input type="text" name="title" id="title" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("title"))
                @foreach($errors->get("title") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="release_date" class="mr-4 font-bold">release date :</label>
            <input type="date" name="release_date" id="release_date" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("release_date"))
                @foreach($errors->get("release_date") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="pages" class="mr-4 font-bold">pages :</label>
            <input type="number" name="pages" id="pages" min="0" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("pages"))
                @foreach($errors->get("pages") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="writer" class="mr-4 font-bold">writer :</label>
            <select name="writer" id="writer" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
                @foreach($writers as $writer)
                    <option value="{{$writer->id}}">{{$writer->firstname." ".$writer->lastname}}</option>
                @endforeach
            </select>
            @if($errors->has("writer"))
                @foreach($errors->get("writer") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="category" class="mr-4 font-bold">category :</label>
            <select name="category" id="category" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            @if($errors->has("category"))
                @foreach($errors->get("category") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-center items-center mt-10">
            <input type="submit" value="add book" class="w-28 h-14 font-bold text-l cursor-pointer border-2 border-[rgb(34,98,198)] bg-[rgb(34,98,198)] text-white rounded-full transition-all hover:bg-white hover:text-[rgb(34,98,198)]">
        </div>
    </form>
@endsection
