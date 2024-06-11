@extends('layout.app')
@section('title')
    add writer
@endsection
@section('content')
    <form action="{{route("writers.create")}}" method="post" class="w-full h-full flex flex-col items-center">
        @csrf
        <div class="min-w-80 flex justify-start items-center">
            <label for="firstname" class="mr-4 font-bold">firstname :</label>
            <input type="text" name="firstname" id="firstname" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("firstname"))
                @foreach($errors->get("firstname") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="lastname" class="mr-4 font-bold">lastname :</label>
            <input type="text" name="lastname" id="lastname" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("lastname"))
                @foreach($errors->get("lastname") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="birth_date" class="mr-4 font-bold">birth date :</label>
            <input type="date" name="birth_date" id="birth_date" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("birth_date"))
                @foreach($errors->get("birth_date") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="biography" class="mr-4 font-bold">biography :</label>
{{--            <input type="text" name="biography" id="biography" min="0" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">--}}
            <textarea name="biography" id="biography" cols="30" rows="5" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-xl outline-0"></textarea>
            @if($errors->has("biography"))
                @foreach($errors->get("biography") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 max-w-full flex justify-start items-center mt-10">
            <span class="font-bold">books :</span>
            @foreach($books as $book)
                <label for="{{$book->title}}" class="ml-6 mr-2 select-none">{{$book->title}} :</label>
                <input type="checkbox" name="books[]" id="{{$book->title}}" value="{{$book->id}}" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @endforeach
            @if($errors->has("books"))
                @foreach($errors->get("books") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-center items-center mt-10">
            <input type="submit" value="add writer" class="w-28 h-14 font-bold text-l cursor-pointer border-2 border-[rgb(34,98,198)] bg-[rgb(34,98,198)] text-white rounded-full transition-all hover:bg-white hover:text-[rgb(34,98,198)]">
        </div>
    </form>
@endsection
