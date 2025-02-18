<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CatgoryController;

Route::get('/',[BlogController::class,'index']);


Route::get('/single', function () {
    return view('.website.single');
});

Route::get('/category', function () {
    return view('.website.category');
});

Route::get('/login',[UserController::class,'login']);
Route::post('/user_auth',[UserController::class,'user_auth']);
Route::get('/signup',[UserController::class,'create']);
Route::post('/signup',[UserController::class,'store']);
Route::get('/logout',[UserController::class,'logout']);


Route::get('/Blog',[BlogController::class,'show']);
Route::get('/creat_blog',[BlogController::class,'create']);
Route::post('/creat_blog',[BlogController::class,'store']);
Route::get('/Publish/{id}',[BlogController::class,'publish']);
Route::get('/Post/{title}',[BlogController::class,'view']);
Route::get('/Edit/{id}',[BlogController::class,'edit']);
Route::post('/Edit/{id}',[BlogController::class,'update']);
Route::get('/Delete/{id}',[BlogController::class,'destroy']);



Route::get('/Contact',[ContactController::class,'show']);
Route::post('/user_contact',[ContactController::class,'store']);

Route::get('/Profile',[UserController::class,'show']);

Route::get('*', function () {
    return view('website.pnf');
});
