<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLessonRequest;
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
    public function add()
    {
        $professors=Professor::all();
        return view("admin.lesson.add",[
            "professors"=>$professors
        ]);
    }
    public function create(StoreLessonRequest $request)
{
    $title=$request->title;
    $course=$request->course;
    $capacity=$request->capacity;
    $professor_id=$request->professor;
    Lesson::create([
        "title"=>$title,
        "course"=>$course,
        "capacity"=>$capacity,
        "professor_id"=>$professor_id
    ]);
    return to_route("lessons");
}
    public function update(Lesson $lesson)
    {
        $professors=Professor::all();
        return view("admin.lesson.update",[
            "lesson"=>$lesson,
            "professors"=>$professors
        ]);
    }
    public function edit(StoreLessonRequest $request,Lesson $lesson)
    {
        $title=$request->title;
        $course=$request->course;
        $capacity=$request->capacity;
        $professor_id=$request->professor;
        $lesson->update([
            "title"=>$title,
            "course"=>$course,
            "capacity"=>$capacity,
            "professor_id"=>$professor_id
        ]);
        return to_route("lessons");
    }

}
