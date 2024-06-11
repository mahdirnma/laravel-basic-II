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
        $books=Book::where("is_active",true)->get();
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
    public function edit(StoreBookRequest $request,Book $book)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $title=$request->title;
        $release_date=$request->release_date;
        $pages=$request->pages;
        $writer=$request->writer;
        $category=$request->category;
        $selectBook=Book::find($book->id);
        $selectBook->update([
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

    public function remove()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $id=request("id");
        $book=Book::find($id);
        $book->update([
            "is_active"=>false
        ]);
        return to_route("books");
    }
}
