<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books=Book::all();
        $categories=Category::all();
        $writers=Writer::all();
        return view("admin.book.index",[
            "books"=>$books,
            "categories"=>$categories,
            "writers"=>$writers
        ]);
    }
}
