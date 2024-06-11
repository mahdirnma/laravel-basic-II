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
    public function search()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $search=request("search");
        $filter=request("book_filter");
        if ($filter)
            $writers=Writer::where("is_active",true)->where("books_id",$filter)->where("firstname","LIKE","%".$search."%")->get();
        else
            $writers=Writer::where("is_active",true)->where("firstname","LIKE","%".$search."%")->get();

        $books=Book::all();
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
        if (!(session()->has("is_login")))
            return view('login');
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
    public function update(Writer $writer)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $books=Book::all();
        return view("admin.writer.update",[
            "writer"=>$writer,
            "books"=>$books
        ]);
    }

    public function edit(Writer $writer,StoreWriterRequest $request)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $biography=$request->biography;
        $birth_date=$request->birth_date;
        $books=implode(",",$request->books);
        $wr=Writer::find($writer->id);
        $wr->update([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "biography"=>$biography,
            "birth_date"=>$birth_date,
            "books_id"=>$books,
        ]);
        return to_route("writers");
    }
    public function delete(Writer $writer)
    {
        if (!(session()->has("is_login")))
            return view('login');
        return view("admin.writer.delete",[
            "writer"=>$writer,
        ]);
    }
    public function remove()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $id=request("id");
        $writer=Writer::find($id);
        $writer->update([
            "is_active"=>false
        ]);
        return to_route("writers");
    }
}
