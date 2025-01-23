<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatgoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/index', function () {
    return view('website.home');
});

Route::get('/signup',[UserController::class,'create']);
Route::get('/login',[UserController::class,'login']);

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/contact',[ContactController::class,'create']);

Route::get('/gallery', function () {
    return view('website.gallery');
});

Route::get('/service', function () {
    return view('website.service');
});

Route::get('/product',[ProductController::class,'index']);



Route::get('*', function () {
    return view('website.pnf');
});


//-------------------ADMIN-----------------//

Route::get('/admin-login', function () {
    return view('admin.index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/add_product',[ProductController::class,'creat']);
Route::get('/manage_product',[ProductController::class,'show']);

Route::get('/manage_order',[OrderController::class,'show']);

Route::get('/manage_contact',[ContactController::class,'show']);

Route::get('/add_catgories',[CatgoryController::class,'create']);
Route::get('/manage_catgories',[CatgoryController::class,'show']);

Route::get('*', function () {
    return view('admin.pnf');
});
