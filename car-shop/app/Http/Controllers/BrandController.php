<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopBrandRequest;
use App\Models\Brand;

class BrandController extends Controller
{
    public function show()
    {
        $brands=Brand::all();
        return view("admin.brand.index",[
            "brands"=>$brands
        ]);
    }
    public function add()
    {
        return view("admin.brand.add");
    }
    public function create(ShopBrandRequest $request)
    {
        $title=$request->title;
        Brand::create([
            "title"=>$title
        ]);
        return to_route("showBrand");
    }
    public function update(string $id)
    {
        $brand=Brand::find($id);
        return view("admin.brand.update",[
            "brand"=>$brand
        ]);
    }
    public function edit(ShopBrandRequest $request,string $id){
        $brand=Brand::find($id);
        $title=$request->title;
        $brand->update([
            "title"=>$title,
        ]);
        return to_route("showBrand");
    }
    public function delete(string $id)
    {
        $brand=Brand::find($id);
        return view("admin.brand.delete",[
            "brand"=>$brand
        ]);
    }
    public function remove()
    {
        $id=request("id");
        $brand=Brand::find($id);
        $brand->delete();
        return to_route("showBrand");
    }
}
