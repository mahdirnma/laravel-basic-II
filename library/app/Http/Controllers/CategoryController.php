<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
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

    public function add()
    {
        if (!(session()->has("is_login")))
            return view('login');
        return view("admin.category.add");
    }

    public function create(StoreCategoryRequest $request)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $title=$request->title;
        Category::create([
            "title"=>$title
        ]);
        return to_route("categories");
    }
    public function update(Category $category)
    {
        if (!(session()->has("is_login")))
            return view('login');

        return view("admin.category.update",[
            "category"=>$category
        ]);
    }
    public function edit(Category $category,StoreCategoryRequest $request)
    {
        if (!(session()->has("is_login")))
            return view('login');
        $selectCategory=Category::find($category->id);
        $title=$request->title;
        $selectCategory->update([
            "title"=>$title
        ]);
        return to_route("categories");
    }
    public function delete(Category $category)
    {
        if (!(session()->has("is_login")))
            return view('login');

        return view("admin.category.delete",[
            "category"=>$category
        ]);
    }
    public function remove()
    {
        if (!(session()->has("is_login")))
            return view('login');
        $id=request("id");
        $category=Category::find($id);
        $category->update([
            "is_active"=>false
        ]);
        return to_route("categories");
    }


}
