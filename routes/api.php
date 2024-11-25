<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth:api');

Route::middleware('auth:api')->apiResource('categories',CategoryController::class)->except(['index','show']);
Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{category}',[CategoryController::class,'show'])->name('categories.show');
