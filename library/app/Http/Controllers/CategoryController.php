<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $categories=Category::where("is_active",true)->get();
        return view("admin.category.index",[
            "categories"=>$categories,
        ]);
    }

}
