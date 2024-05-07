<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantFoodRequest;
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
    public function add(){
        $categories=Category::all();
        return view("admin.food.add",[
            "categories"=>$categories
        ]);
    }
        public function create(RestaurantFoodRequest $request){

        $title=$request->title;
        $food_type=$request->food_type;
        $entity=$request->entity;
        $category_id=$request->category_id;
        $price=$request->price;
        Food::create([
            "title"=>$title,
            "food_type"=>$food_type,
            "entity"=>$entity,
            "category_id"=>$category_id,
            "price"=>$price
        ]);
        return redirect("/admin/foods");
    }
    public function update(int $id){
        $food=Food::find($id);
        $categories=Category::all();
        return view("admin.food.update",[
            "food"=>$food,
            "categories"=>$categories
        ]);
    }
    public function edit(RestaurantFoodRequest $request,int $id){
        $food=Food::find($id);
        $title=$request->title;
        $food_type=$request->food_type;
        $entity=$request->entity;
        $category_id=$request->category_id;
        $price=$request->price;
        $food->update([
            "title"=>$title,
            "food_type"=>$food_type,
            "entity"=>$entity,
            "category_id"=>$category_id,
            "price"=>$price
        ]);
        return redirect("/admin/foods");
    }
    public function delete(int $id){
        $food=Food::find($id);
        return view("admin.food.delete",[
            "food"=>$food
        ]);
    }

    public function remove()
    {
        $id=request("id");
        $food=Food::find($id);
        $food->delete($id);
        return redirect("/admin/foods");
    }
    public function priceUpdate(int $id){
        $food=Food::find($id);
        return view("admin.food.priceUpdate",[
            "food"=>$food
        ]);
    }

    public function priceEdit(int $id)
    {
        $price=request("price");
        $food=Food::find($id);
        $food->update([
            "price"=>$price
        ]);
        return redirect("/admin/foods");
    }

}
