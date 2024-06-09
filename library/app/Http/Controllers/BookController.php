<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $books=Book::all();
        $categories=Category::all();
        $writers=Writer::all();
        return view("admin.book.index",[
            "books"=>$books,
            "categories"=>$categories,
            "writers"=>$writers
        ]);
    }

    public function add()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $categories=Category::all();
        $writers=Writer::all();
        return view("admin.book.add",[
            "categories"=>$categories,
            "writers"=>$writers
        ]);

    }

    public function create(StoreBookRequest $request)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $title=$request->title;
        $release_date=$request->release_date;
        $pages=$request->pages;
        $writer=$request->writer;
        $category=$request->category;
        Book::create([
            "title"=>$title,
            "release_date"=>$release_date,
            "pages"=>$pages,
            "writer_id"=>$writer,
            "category_id"=>$category,
        ]);
        return to_route("books");
    }
    public function update(Book $book)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $categories=Category::all();
        $writers=Writer::all();
        return view("admin.book.update",[
            "categories"=>$categories,
            "writers"=>$writers,
            "book"=>$book
        ]);
    }
    public function edit(StoreBookRequest $request)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $title=$request->title;
        $release_date=$request->release_date;
        $pages=$request->pages;
        $writer=$request->writer;
        $category=$request->category;
        $book=Book::find($request->book);
        $book->update([
            "title"=>$title,
            "release_date"=>$release_date,
            "pages"=>$pages,
            "writer_id"=>$writer,
            "category_id"=>$category,
        ]);
        return to_route("books");
    }
    public function delete(Book $book)
    {
        if (!(session()->has("is_login")))
            return view('login');
        return view("admin.book.delete",[
            "book"=>$book
        ]);
    }
}
