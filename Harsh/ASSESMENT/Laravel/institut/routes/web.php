<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TecherController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('website.home');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/single', function () {
    return view('website.single');
});

Route::get('/contact',[ContactController::class,'index']);
Route::post('/insert_contact',[ContactController::class,'store']);


Route::get('/teacher',[TecherController::class,'index']);

Route::get('/login',[StudentController::class,'login']);

Route::get('/signup',[StudentController::class,'create']);
Route::post('/insert_signup',[StudentController::class,'store']);

Route::get('*', function () {
    return view('website.pnf');
});



//-----------------------------Adnin-------------------------------//

Route::get('/admin_login', function () {
    return view('admin.admin_login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/add_book',[BookController::class,'index']);
Route::post('/add_book',[BookController::class,'store']);
Route::get('/manage_book',[BookController::class,'show']);

Route::get('/add_department',[DepartmentController::class,'index']);
Route::post('/add_department',[DepartmentController::class,'store']);
Route::get('/manage_department',[DepartmentController::class,'show']);

Route::get('/add_teacher',[TecherController::class,'create']);
Route::post('/add_teacher',[TecherController::class,'store']);
Route::get('/manage_teacher',[TecherController::class,'show']);

Route::get('/manage_contact',[ContactController::class,'show']);

Route::get('/manage_student',[StudentController::class,'show']);


Route::get('*', function () {
    return view('admin.pnf');
});