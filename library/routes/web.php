<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrustController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class,"index"])->name("dashboard");
Route::get('/login',[UserController::class,"login"])->name("login.show");
Route::post('/login',[AuthController::class,"login"])->name("login");
Route::get('/signin',[UserController::class,"signin"])->name("signin.show");
Route::post('/signin',[AuthController::class,"signin"])->name("signin");

Route::prefix("admin")->group(function (){
    Route::controller(BookController::class)->group(function (){
        Route::get('/books', "index")->name("books");
        Route::get('/books/add',"add")->name("books.add");
        Route::post('/books/create',"create")->name("books.create");
        Route::get('/books/{book}/update',"update")->name("books.update");
        Route::put('/books/{book}/edit',"edit")->name("books.edit");
        Route::get('/books/{book}/delete',"delete")->name("books.delete");
        Route::delete('/books/remove',"remove")->name("books.remove");
    });
    Route::controller(CategoryController::class)->group(function (){
        Route::get('/categories', "index")->name("categories");
        Route::get('/categories/add', "add")->name("categories.add");
        Route::post('/categories/create', "create")->name("categories.create");
        Route::get('/categories/{category}/update', "update")->name("categories.update");
        Route::put('/categories/{category}/edit', "edit")->name("categories.edit");
        Route::get('/categories/{category}/delete', "delete")->name("categories.delete");
        Route::delete('/categories/remove', "remove")->name("categories.remove");
    });
    Route::controller(TrustController::class)->group(function (){
        Route::get('/trusts', "index")->name("trusts");
    });
});
