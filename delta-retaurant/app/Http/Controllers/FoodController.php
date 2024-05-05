<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function show(){
        $foods=Food::all();
        $categories=Category::all();
        return view("admin.food.index",[
            "foods"=>$foods,
            "categories"=>$categories
        ]);
    }
}
