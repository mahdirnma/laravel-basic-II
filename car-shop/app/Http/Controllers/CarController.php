<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopCarRequest;
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
    public function add()
    {
        $brands=Brand::all();
        $engines=Engine::all();
        return view("admin.car.add",[
            "brands"=>$brands,
            "engines"=>$engines
        ]);
    }
    public function create(ShopCarRequest $request)
    {
        $title=$request->title;
        $brand=$request->brand_id;
        $car_type=$request->car_type;
        $cylinder=$request->cylinder;
        $engine=$request->engine_id;
        $price=$request->price;
        Car::create([
            "title"=>$title,
            "brand_id"=>$brand,
            "car_type"=>$car_type,
            "cylinder"=>$cylinder,
            "engine_id"=>$engine,
            "price"=>$price
        ]);
        return to_route("showCar");
    }
    public function update(string $id)
    {
        $car=Car::find($id);
        $brands=Brand::all();
        $engines=Engine::all();
        return view("admin.car.update",[
            "car"=>$car,
            "brands"=>$brands,
            "engines"=>$engines
        ]);
    }
    public function edit(ShopCarRequest $request,string $id){
        $car=Car::find($id);
        $title=$request->title;
        $brand=$request->brand_id;
        $car_type=$request->car_type;
        $cylinder=$request->cylinder;
        $engine=$request->engine_id;
        $price=$request->price;
        $car->update([
            "title"=>$title,
            "brand_id"=>$brand,
            "car_type"=>$car_type,
            "cylinder"=>$cylinder,
            "engine_id"=>$engine,
            "price"=>$price
        ]);
        return to_route("showCar");
    }
}
