<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public static function show()
    {
        $students=Student::where("is_active",true)->get();
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
        $national_code=$request->national_code;
        $field=$request->field;
        $semester=$request->semester;
        Student::create([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "national_code"=>$national_code,
            "field"=>$field,
            "semester"=>$semester
        ]);
        return to_route("students");
    }
    public function update(Student $student)
    {
        return view("admin.student.update",[
            "student"=>$student
        ]);
    }
    public function edit(StoreStudentRequest $request,Student $student)
    {
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $national_code=$request->national_code;
        $field=$request->field;
        $semester=$request->semester;
        $student->update([
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "national_code"=>$national_code,
            "field"=>$field,
            "semester"=>$semester
        ]);
        return to_route("students");
    }
    public function delete(Student $student)
    {
        return view("admin.student.delete",[
            "student"=>$student
        ]);
    }
    public function remove(){
        $id=request("id");
        $student=Student::find($id);
        $student->update([
            "is_active"=>false
        ]);
        return to_route("students");
    }

}
