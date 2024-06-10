<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Trust;
use Illuminate\Http\Request;

class TrustController extends Controller
{
    public function index()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $books=Book::all();
        $trusts=Trust::where("is_active",true)->get();
        return view("admin.trust.index",[
            "books"=>$books,
            "trusts"=>$trusts,
        ]);
    }

}
