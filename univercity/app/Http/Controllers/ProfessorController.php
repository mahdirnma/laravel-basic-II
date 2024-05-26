<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessorRequest;
use App\Models\Professor;
use App\Models\Student;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public static function show()
    {
        $professors=Professor::where("is_active",true)->get();
        return view('admin.professor.index',[
            "professors"=>$professors
        ]);
    }
    public function add()
    {
        return view("admin.professor.add");
    }
    public function create(StoreProfessorRequest $request)
    {
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $national_code=$request->national_code;
        $field=$request->field;
        $degree=$request->degree;
        Professor::create([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "national_code"=>$national_code,
            "field"=>$field,
            "degree"=>$degree
        ]);
        return to_route("professors");
    }
    public function update(Professor $professor)
    {
        return view("admin.professor.update",[
            "professor"=>$professor
        ]);
    }
    public function edit(StoreProfessorRequest $request,Professor $professor)
    {
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $national_code=$request->national_code;
        $field=$request->field;
        $degree=$request->degree;
        $professor->update([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "national_code"=>$national_code,
            "field"=>$field,
            "degree"=>$degree
        ]);
        return to_route("professors");
    }
    public function delete(Professor $professor)
    {
        return view("admin.professor.delete",[
            "professor"=>$professor
        ]);
    }
    public function remove(){
        $id=request("id");
        $professor=Professor::find($id);
        $professor->update([
            "is_active"=>false
        ]);
        return to_route("professors");
    }

}
