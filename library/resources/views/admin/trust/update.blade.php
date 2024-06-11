@extends('layout.app')
@section('title')
    update trust
@endsection
@section('content')
    <form action="{{route("trusts.edit",["trust"=>$trust->id])}}" method="post" class="w-full h-full flex flex-col items-center">
        @csrf
        @method("put")
        <div class="min-w-80 flex justify-start items-center">
            <label for="firstname" class="mr-4 font-bold">firstname :</label>
            <input type="text" name="firstname" id="firstname" value="{{$trust->firstname}}" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("firstname"))
                @foreach($errors->get("firstname") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="lastname" class="mr-4 font-bold">lastname :</label>
            <input type="text" name="lastname" id="lastname" value="{{$trust->firstname}}" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("lastname"))
                @foreach($errors->get("lastname") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="borrow_date" class="mr-4 font-bold">borrow date :</label>
            <input type="date" name="borrow_date" id="borrow_date" value="{{explode(" ",$trust->borrow_date)[0]}}" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("borrow_date"))
                @foreach($errors->get("borrow_date") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="giveback_date" class="mr-4 font-bold">giveback date :</label>
            <input type="date" name="giveback_date" id="giveback_date" value="{{explode(" ",$trust->giveback_date)[0]}}" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
            @if($errors->has("giveback_date"))
                @foreach($errors->get("giveback_date") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-start items-center mt-10">
            <label for="book" class="mr-4 font-bold">book :</label>
            <select name="book" id="book" class="border-2 border-[rgb(34,98,198)] px-3 py-0.5 rounded-full outline-0">
                @foreach($books as $book)
                    <option value="{{$book->id}}" {{$book->id==$trust->book_id?"selected":""}}>{{$book->title}}</option>
                @endforeach
            </select>
            @if($errors->has("book"))
                @foreach($errors->get("book") as $err)
                    <p class="ml-2 text-red-900">{{$err}}</p>
                @endforeach
            @endif
        </div>
        <div class="min-w-80 flex justify-center items-center mt-10">
            <input type="submit" value="update trust" class="w-32 h-14 font-bold text-l cursor-pointer border-2 border-[rgb(34,98,198)] bg-[rgb(34,98,198)] text-white rounded-full transition-all hover:bg-white hover:text-[rgb(34,98,198)]">
        </div>
    </form>
@endsection
