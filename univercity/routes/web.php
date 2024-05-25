<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/admin/student',[StudentController::class,"show"])->name("students");
Route::get('/admin/student/add',[StudentController::class,"add"])->name("addStudent");
Route::post('/admin/student/create',[StudentController::class,"create"])->name("createStudent");
Route::get('/admin/student/{student}/update',[StudentController::class,"update"])->name("updateStudent");
Route::put('/admin/student/{student}/edit',[StudentController::class,"edit"])->name("editStudent");
Route::get('/admin/student/{student}/delete',[StudentController::class,"delete"])->name("deleteStudent");
Route::delete('/admin/student/remove',[StudentController::class,"remove"])->name("removeStudent");


