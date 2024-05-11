<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CarController::class,"index"]);
Route::get('/admin/car', [CarController::class,"show"])->name("showCar");
Route::get('/admin/car/add', [CarController::class,"add"])->name("addCar");
Route::post('/admin/car/create', [CarController::class,"create"])->name("createCar");
