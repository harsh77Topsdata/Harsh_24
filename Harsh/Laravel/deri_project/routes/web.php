<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatgoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('website.home');
});

Route::get('/signup',[UserController::class,'create']);
Route::post('/user_signup',[UserController::class,'store']);

Route::get('/login',[UserController::class,'login']);
Route::post('/user_auth',[UserController::class,'user_auth']);
Route::get('/user_logout',[UserController::class,'user_logout']);

Route::get('/user_profile',[UserController::class,'user_profile']);
Route::get('/user_profile/{id}',[UserController::class,'edit']);
Route::get('/update_user/{id}',[UserController::class,'update']);

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/contact',[ContactController::class,'create']);
Route::post('/user_contact',[ContactController::class,'store']);

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

Route::get('/add_product',[ProductController::class,'create']);
Route::post('/add_product',[ProductController::class,'store']);
Route::get('/manage_product',[ProductController::class,'show']);
Route::get('/manage_product/{id}',[ProductController::class,'destroy']);

Route::get('/manage_order',[OrderController::class,'show']);

Route::get('/manage_contact',[ContactController::class,'show']);
Route::get('/manage_contact/{id}',[ContactController::class,'destroy']);

Route::get('/add_catgories',[CatgoryController::class,'create']);
Route::post('/add_catgories',[CatgoryController::class,'store']);
Route::get('/manage_catgories',[CatgoryController::class,'show']);
Route::get('/manage_catgories/{id}',[CatgoryController::class,'destroy']);

Route::get('*', function () {
    return view('admin.pnf');
});
