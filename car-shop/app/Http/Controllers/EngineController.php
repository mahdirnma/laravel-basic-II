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
    public function update(string $id)
    {
        $engine=Engine::find($id);
        return view("admin.engine.update",[
            "engine"=>$engine
        ]);
    }
    public function edit(ShopEngineRequest $request,string $id){
        $engine=Engine::find($id);
        $title=$request->title;
        $engine->update([
            "title"=>$title,
        ]);
        return to_route("showEngine");
    }
    public function delete(string $id)
    {
        $engine=Engine::find($id);
        return view("admin.engine.delete",[
            "engine"=>$engine
        ]);
    }
    public function remove()
    {
        $id=request("id");
        $engine=Engine::find($id);
        $engine->delete();
        return to_route("showEngine");
    }

}
