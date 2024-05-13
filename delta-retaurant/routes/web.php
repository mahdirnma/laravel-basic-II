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
Route::prefix("admin")->group(function (){
    Route::controller(FoodController::class)->group(function (){
        Route::get('/foods',"show");
        Route::get('/foods/add',"add");
        Route::post('/foods/create',"create");
        Route::get('/foods/{id}/update',"update");
        Route::put('/foods/{id}/edit',"edit");
        Route::get('/foods/{id}/delete',"delete");
        Route::delete('/foods/remove',"remove");

        Route::get('/foods/{id}/priceUpdate',"priceUpdate");
        Route::put('/foods/{id}/priceEdit',"priceEdit");
        Route::get('/foods/{id}/entityUpdate',"entityUpdate");
        Route::put('/foods/{id}/entityEdit',"entityEdit");
    });
    Route::controller(CategoryController::class)->group(function (){
        Route::get('/categories',"show");
        Route::get('/categories/add',"add");
        Route::post('/categories/create',"create");
        Route::get('/categories/{id}/update',"update");
        Route::put('/categories/{id}/edit',"edit");
        Route::get('/categories/{id}/delete',"delete");
        Route::delete('/categories/remove',"remove");
    });
});

