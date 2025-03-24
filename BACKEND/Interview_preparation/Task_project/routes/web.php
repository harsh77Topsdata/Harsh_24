<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[ProductController::class,'index']);

Route::post('/add_product',[ProductController::class,'store']);
Route::get('/add_product',[ProductController::class,'create']);
Route::get('/manage_product',[ProductController::class,'show']);
Route::get('/manage_product/{id}',[ProductController::class,'destroy']);
Route::get('/edit_product/{id}',[ProductController::class,'edit']);
Route::post('/edit_product/{id}',[ProductController::class,'update']);
