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
