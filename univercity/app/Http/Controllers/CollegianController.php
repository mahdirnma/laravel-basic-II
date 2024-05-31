<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollegianLessonRequest;
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
    public function delete(Collegian $collegian)
    {
        $professors=Professor::all();
        $lessons=Lesson::all();
        $students=Student::all();
        return view("admin.collegian.delete",[
            "collegian"=>$collegian,
            "lessons"=>$lessons,
            "professors"=>$professors,
            "students"=>$students
        ]);
    }
    public function remove(){
        $id=request("id");
        $collegian=Collegian::find($id);
        $collegian->update([
            "is_active"=>false
        ]);
        return to_route("collegians");
    }
/*    public function add()
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
    }*/
    public function add()
    {
        $students=Student::all();
        return view("admin.collegian.add",[
            "students"=>$students
        ]);
    }

    public function insert_lesson(StoreCollegianRequest $request)
    {
        $student_id=$request->student;
        $lessons=Lesson::distinct()->pluck('title');
//        $lessons=Lesson::distinct('title')->get();
        return view("admin.collegian.insertLesson",[
            "student_id"=>$student_id,
            "lessons"=>$lessons
        ]);
    }
    public function insert_professor(StoreCollegianLessonRequest $request){
        $student_id=$request->student;
        $lesson_title=$request->lesson;
        $lessons=Lesson::where("title",$lesson_title)->get();
        $prof=$lessons->pluck('professor_id');
        $professors=Professor::whereIn("id",$prof)->get();
        return view("admin.collegian.insertProfessor",[
            "student_id"=>$student_id,
            "lesson_title"=>$lesson_title,
            "professors"=>$professors
        ]);
    }
    public function create(StoreCollegianRequest $request)
    {
        $student_id=$request->student;
        $lesson_title=$request->lesson;
        $professor_id=$request->professor;
        $lesson=Lesson::where("title",$lesson_title)->where("professor_id",$professor_id)->first();
/*        $lesson=Lesson::where("title",$lesson_title)->where("professor_id",$professor_id)->get();
        dd($lesson[0]->id);*/
        Collegian::create([
            "student_id"=>$student_id,
            "lesson_id"=>$lesson->id,
            "professor_id"=>$professor_id
        ]);
        return to_route("collegians");
    }

}
