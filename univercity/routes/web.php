<?php

use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class,"index"])->name("home");
Route::prefix("admin")->group(function (){
    Route::controller(StudentController::class)->group(function (){
        Route::get('/student',"show")->name("students");
        Route::get('/student/add',"add")->name("addStudent");
        Route::post('/student/create',"create")->name("createStudent");
        Route::get('/student/{student}/update',"update")->name("updateStudent");
        Route::put('/student/{student}/edit',"edit")->name("editStudent");
        Route::get('/student/{student}/delete',"delete")->name("deleteStudent");
        Route::delete('/student/remove',"remove")->name("removeStudent");
    });
    Route::controller(ProfessorController::class)->group(function (){
        Route::get('/professor',"show")->name("professors");
        Route::get('/professor/add',"add")->name("addProfessor");
        Route::post('/professor/create',"create")->name("createProfessor");
        Route::get('/professor/{professor}/update',"update")->name("updateProfessor");
        Route::put('/professor/{professor}/edit',"edit")->name("editProfessor");
        Route::get('/professor/{professor}/delete',"delete")->name("deleteProfessor");
        Route::delete('/professor/remove',"remove")->name("removeProfessor");
    });
    Route::controller(LessonController::class)->group(function (){
        Route::get('/lesson',"show")->name("lessons");
    });

});


