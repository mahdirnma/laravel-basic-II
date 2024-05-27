<?php

namespace App\Http\Controllers;

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

}
