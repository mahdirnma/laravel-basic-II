<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EngineController;
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
        Route::get('/brand/{id}/update',"update")->name("updateBrand");
        Route::put('/brand/{id}/edit',"edit")->name("editBrand");
        Route::get('/brand/{id}/delete',"delete")->name("deleteBrand");
        Route::delete('/brand/remove',"remove")->name("removeBrand");
    });
    Route::controller(EngineController::class)->group(function (){
        Route::get('/engine',"show")->name("showEngine");
        Route::get('/engine/add', "add")->name("addEngine");
        Route::post('/engine/create', "create")->name("createEngine");
        Route::get('/engine/{id}/update',"update")->name("updateEngine");
        Route::put('/engine/{id}/edit',"edit")->name("editEngine");

    });
});

