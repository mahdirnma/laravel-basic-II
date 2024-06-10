<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrustRequest;
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
    public function add()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $books=Book::all();
        return view("admin.trust.add",[
            "books"=>$books,
        ]);
    }

    public function create(StoreTrustRequest $request)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $borrow_date=$request->borrow_date;
        $giveback_date=$request->giveback_date;
        $book=$request->book;
        Trust::create([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "borrow_date"=>$borrow_date,
            "giveback_date"=>$giveback_date,
            "book_id"=>$book,
        ]);
        return to_route("trusts");
    }

    public function update(Trust $trust)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $books=Book::all();
        return view("admin.trust.update",[
            "books"=>$books,
            "trust"=>$trust,
        ]);
    }
    public function edit(Trust $trust,StoreTrustRequest $request)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $borrow_date=$request->borrow_date;
        $giveback_date=$request->giveback_date;
        $book=$request->book;
        $selectTrust=Trust::find($trust->id);
        $selectTrust->update([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "borrow_date"=>$borrow_date,
            "giveback_date"=>$giveback_date,
            "book_id"=>$book,
        ]);
        return to_route("trusts");
    }
}
