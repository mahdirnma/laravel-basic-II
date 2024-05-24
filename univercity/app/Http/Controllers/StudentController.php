<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public static function show()
    {
        $students=Student::all();
        return view('admin.student.index',[
            "students"=>$students
        ]);
    }

    public function add()
    {
        return view("admin.student.add");
    }
    public function create(StoreStudentRequest $request)
    {
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $field=$request->field;
        $semester=$request->semester;
        Student::create([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "field"=>$field,
            "semester"=>$semester
        ]);
        return to_route("students");
    }
}
