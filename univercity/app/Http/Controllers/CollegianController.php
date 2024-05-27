<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollegianRequest;
use App\Models\Collegian;
use App\Models\Lesson;
use App\Models\Professor;
use App\Models\Student;
use Illuminate\Http\Request;

class CollegianController extends Controller
{
    public static function show()
    {
        $collegians=Collegian::where("is_active",true)->get();
        $professors=Professor::all();
        $lessons=Lesson::all();
        $students=Student::all();
        return view('admin.collegian.index',[
            "collegians"=>$collegians,
            "lessons"=>$lessons,
            "professors"=>$professors,
            "students"=>$students
        ]);
    }
    public function add()
    {
        $professors=Professor::all();
        $lessons=Lesson::all();
        $students=Student::all();
        return view("admin.collegian.add",[
            "lessons"=>$lessons,
            "professors"=>$professors,
            "students"=>$students
        ]);
    }
    public function create(StoreCollegianRequest $request)
    {
        $student_id=$request->student;
        $lesson_id=$request->lesson;
        $professor_id=$request->professor;
        Collegian::create([
            "student_id"=>$student_id,
            "lesson_id"=>$lesson_id,
            "professor_id"=>$professor_id
        ]);
        return to_route("collegians");
    }
    public function update(Collegian $collegian)
    {
        $professors=Professor::all();
        $lessons=Lesson::all();
        $students=Student::all();
        return view("admin.collegian.update",[
            "collegian"=>$collegian,
            "lessons"=>$lessons,
            "professors"=>$professors,
            "students"=>$students
        ]);
    }
    public function edit(StoreCollegianRequest $request,Collegian $collegian)
    {
        $student_id=$request->student;
        $lesson_id=$request->lesson;
        $professor_id=$request->professor;
        $collegian->update([
            "student_id"=>$student_id,
            "lesson_id"=>$lesson_id,
            "professor_id"=>$professor_id
        ]);
        return to_route("collegians");
    }

}
