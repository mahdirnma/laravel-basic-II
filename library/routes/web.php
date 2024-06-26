<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrustController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WriterController;
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
Route::get('/logout',[AuthController::class,"logout"])->name("logout");
Route::post('/logout',[AuthController::class,"logoutGet"])->name("logout.get");


Route::prefix("admin")->group(function (){
    Route::controller(BookController::class)->group(function (){
        Route::get('/books', "index")->name("books");
        Route::get('/books/search', "search")->name("books.search");
        Route::get('/books/add',"add")->name("books.add");
        Route::post('/books/create',"create")->name("books.create");
        Route::get('/books/{book}/update',"update")->name("books.update");
        Route::put('/books/{book}/edit',"edit")->name("books.edit");
        Route::get('/books/{book}/delete',"delete")->name("books.delete");
        Route::delete('/books/remove',"remove")->name("books.remove");
    });
    Route::controller(CategoryController::class)->group(function (){
        Route::get('/categories', "index")->name("categories");
        Route::get('/categories/search', "search")->name("categories.search");
        Route::get('/categories/add', "add")->name("categories.add");
        Route::post('/categories/create', "create")->name("categories.create");
        Route::get('/categories/{category}/update', "update")->name("categories.update");
        Route::put('/categories/{category}/edit', "edit")->name("categories.edit");
        Route::get('/categories/{category}/delete', "delete")->name("categories.delete");
        Route::delete('/categories/remove', "remove")->name("categories.remove");
    });
    Route::controller(TrustController::class)->group(function (){
        Route::get('/trusts', "index")->name("trusts");
        Route::get('/trusts/search', "search")->name("trusts.search");
        Route::get('/trusts/add', "add")->name("trusts.add");
        Route::post('/trusts/create', "create")->name("trusts.create");
        Route::get('/trusts/{trust}/update', "update")->name("trusts.update");
        Route::put('/trusts/{trust}/edit', "edit")->name("trusts.edit");
        Route::get('/trusts/{trust}/delete', "delete")->name("trusts.delete");
        Route::delete('/trusts/remove', "remove")->name("trusts.remove");
    });
    Route::controller(WriterController::class)->group(function (){
        Route::get('/writers', "index")->name("writers");
        Route::get('/writers/search', "search")->name("writers.search");
        Route::get('/writers/add', "add")->name("writers.add");
        Route::post('/writers/create', "create")->name("writers.create");
        Route::get('/writers/{writer}/update', "update")->name("writers.update");
        Route::put('/writers/{writer}/edit', "edit")->name("writers.edit");
        Route::get('/writers/{writer}/delete', "delete")->name("writers.delete");
        Route::delete('/writers/remove', "remove")->name("writers.remove");
    });
});
