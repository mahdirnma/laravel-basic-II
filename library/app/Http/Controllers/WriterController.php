<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWriterRequest;
use App\Models\Book;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $books=Book::all();
        $writers=Writer::where("is_active",true)->get();
        return view("admin.writer.index",[
            "books"=>$books,
            "writers"=>$writers
        ]);
    }
    public function add()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $books=Book::all();
        return view("admin.writer.add",[
            "books"=>$books
        ]);

    }
    public function create(StoreWriterRequest $request)
    {
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $biography=$request->biography;
        $birth_date=$request->birth_date;
        $books=implode(",",$request->books);
        Writer::create([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "biography"=>$biography,
            "birth_date"=>$birth_date,
            "books_id"=>$books,
        ]);
        return to_route("writers");
    }

}
