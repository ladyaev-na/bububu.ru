<?php

use App\Http\Controllers\Web\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register',[AuthController::class,'showRegistrationForm']);
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::get('/login',[AuthController::class,'showLoginForm']);
Route::post('/login',[AuthController::class,'login'])->name('login');

Route::get('/logout',[AuthController::class,'logout'])->middleware('auth:web');


/*Route::get('/categories',[CategoryController::class,'index'])->name('categories');
Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
Route::get('/categories/{category}',[CategoryController::class,'show'])->name('categories.show');
Route::get('/categories/{category}/edit',[CategoryController::class,'edit'])->name('categories.update');
Route::put('/categories/{category}/edit',[CategoryController::class,'update'])->name('categories.update');
Route::delete('/categories/{category}',[CategoryController::class,'destroy'])->name('categories.destroy');*/

Route::middleware('auth:web')->resource('categories', CategoryController::class)->except(['index','show']);
Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{category}',[CategoryController::class,'show'])->name('categories.show');


Route::resource('products', \App\Http\Controllers\Web\ProductController::class);
