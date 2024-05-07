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
Route::get('/admin/foods/{id}/delete',[FoodController::class,"delete"]);
Route::delete('/admin/foods/remove',[FoodController::class,"remove"]);

Route::get('/admin/categories',[CategoryController::class,"show"]);
Route::get('/admin/categories/add',[CategoryController::class,"add"]);
Route::post('/admin/categories/create',[CategoryController::class,"create"]);
Route::get('/admin/categories/{id}/update',[CategoryController::class,"update"]);
Route::put('/admin/categories/{id}/edit',[CategoryController::class,"edit"]);
Route::get('/admin/categories/{id}/delete',[CategoryController::class,"delete"]);
Route::delete('/admin/categories/remove',[CategoryController::class,"remove"]);
Route::get('/admin/foods/{id}/priceUpdate',[FoodController::class,"priceUpdate"]);
Route::put('/admin/foods/{id}/priceEdit',[FoodController::class,"priceEdit"]);
