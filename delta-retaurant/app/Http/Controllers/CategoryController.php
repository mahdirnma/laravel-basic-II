<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(){
        $categories=Category::all();
        return view("admin.category.index",[
            "categories"=>$categories
        ]);
    }
    public function add(){
        return view("admin.category.add");
    }
    public function create(RestaurantCategoryRequest $request){
        $title=$request->title;
        Category::create([
            "title"=>$title
        ]);
        return redirect("/admin/categories");
    }
    public function update(int $id){
        $category=Category::find($id);
        return view("admin.category.update",[
            "category"=>$category
        ]);
    }
    public function edit(RestaurantCategoryRequest $request,int $id){
        $category=Category::find($id);
        $title=$request->title;
        $category->update([
            "title"=>$title
        ]);
        return redirect("/admin/categories");
    }
    public function delete(int $id){
        $category=Category::find($id);
        return view("admin.category.delete",[
            "category"=>$category
        ]);
    }
    public function remove(){
        $id=request("id");
        $category=Category::find($id);
        $category->delete();
        return redirect("/admin/categories");
    }

}
