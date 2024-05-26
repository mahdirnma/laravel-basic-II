<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Professor;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public static function show()
    {
        $lessons=Lesson::where("is_active",true)->get();
        $professors=Professor::all();
        return view('admin.lesson.index',[
            "lessons"=>$lessons,
            "professors"=>$professors
        ]);
    }

}
