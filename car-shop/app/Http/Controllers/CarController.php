<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Engine;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function show()
    {
        $cars=Car::all();
        $brands=Brand::all();
        $engines=Engine::all();
        return view("admin.car.index",[
            "cars"=>$cars,
            "brands"=>$brands,
            "engines"=>$engines
        ]);
    }
}
