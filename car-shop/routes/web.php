<?php

use App\Http\Controllers\BrandController;
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
Route::prefix("admin")->group(function (){
    Route::controller(CarController::class)->group(function (){
        Route::get('/car',"show")->name("showCar");
        Route::get('/car/add', "add")->name("addCar");
        Route::post('/car/create', "create")->name("createCar");
        Route::get('/car/{id}/update',"update")->name("updateCar");
        Route::put('/car/{id}/edit',"edit")->name("editCar");
        Route::get('/car/{id}/delete',"delete")->name("deleteCar");
        Route::delete('/car/remove',"remove")->name("removeCar");
    });
    Route::controller(BrandController::class)->group(function (){
        Route::get('/brand',"show")->name("showBrand");
        Route::get('/brand/add', "add")->name("addBrand");
        Route::post('/brand/create', "create")->name("createBrand");
    });
});

