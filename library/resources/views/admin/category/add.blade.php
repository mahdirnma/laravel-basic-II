@extends('layout.app')
@section('title')
    add categories
@endsection
@section('content')
    <form action="{{route("categories.create")}}" method="post" class="w-full h-full flex flex-col items-center">
        @csrf
        <div class="min-w-80 flex justify-start items-center">
            <label for="title" class="mr-4">title :</label>
            <input type="text" name="title" id="title" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("title"))
                @foreach($errors->get("title") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-center items-center mt-10">
            <input type="submit" value="add category" class="w-40 h-14 font-bold text-l cursor-pointer border-2 border-[rgb(34,98,198)] bg-[rgb(34,98,198)] text-white rounded-full transition-all hover:bg-white hover:text-[rgb(34,98,198)]">
        </div>
    </form>
@endsection
