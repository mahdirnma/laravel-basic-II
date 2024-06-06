<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (!(session()->has("is_login")))
            return view('login');
        return view('admin.index');
    }
    public function signin()
    {
/*        if (session()->has("is_login"))
            return view('admin.index');*/
        return view('signin');
    }
    public function login()
    {
        return view('login');
    }
}
