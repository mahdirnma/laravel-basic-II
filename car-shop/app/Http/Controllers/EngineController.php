<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopEngineRequest;
use App\Models\Engine;
use Illuminate\Http\Request;

class EngineController extends Controller
{
    public function show()
    {
        $engines=Engine::all();
        return view("admin.engine.index",[
            "engines"=>$engines
        ]);
    }
    public function add()
    {
        return view("admin.engine.add");
    }
    public function create(ShopEngineRequest $request)
    {
        $title=$request->title;
        Engine::create([
            "title"=>$title
        ]);
        return to_route("showEngine");
    }

}
