<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Trust;
use App\Models\Writer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $books=Book::where("is_active",true)->count();
        $categories=Category::where("is_active",true)->count();
        $writers=Writer::where("is_active",true)->count();
        $trusts=Trust::where("is_active",true)->count();
        return view('admin.index',[
            "books"=>$books,
            "categories"=>$categories,
            "writers"=>$writers,
            "trusts"=>$trusts,
        ]);
    }
    public function signin()
    {
        if (session()->has("is_login"))
            return view('admin.index');
        return view('signin');
    }
    public function login()
    {
        if (session()->has("is_login"))
            return view('admin.index');
        return view('login');
    }
}
