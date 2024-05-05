<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
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

Route::get('/',[FoodController::class,"index"]);
Route::get('/admin/foods',[FoodController::class,"show"]);
Route::get('/admin/foods/add',[FoodController::class,"add"]);
Route::post('/admin/foods/create',[FoodController::class,"create"]);
Route::get('/admin/foods/{id}/update',[FoodController::class,"update"]);
Route::put('/admin/foods/{id}/edit',[FoodController::class,"edit"]);

Route::get('/admin/categories',[CategoryController::class,"show"]);
