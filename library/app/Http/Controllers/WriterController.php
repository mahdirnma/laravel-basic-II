<?php

namespace App\Http\Controllers;

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

}
