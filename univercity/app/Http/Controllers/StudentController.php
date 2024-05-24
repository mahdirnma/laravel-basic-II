<?php

namespace App\Http\Controllers;

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
}
