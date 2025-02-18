<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TecherController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Controller\ContactController;


Route::get('/', function () {
    return view('website.home');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/contact', function () {
    return view('website.contact');
});


Route::get('/teacher', function () {
    return view('website.teacher');
});

Route::get('/single', function () {
    return view('website.single');
});


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

Route::get('/add_book', function () {
    return view('admin.add_book');
});

Route::get('/manage_book', function () {
    return view('admin.manage_book');
});

Route::get('/add_department', function () {
    return view('admin.add_department');
});

Route::get('/manage_department', function () {
    return view('admin.manage_department');
});

Route::get('/add_teacher', function () {
    return view('admin.add_teacher');
});

Route::get('/manage_teacher', function () {
    return view('admin.manage_teacher');
});

Route::get('/manage_contact', function () {
    return view('admin.manage_contact');
});

Route::get('/manage_student',[StudentController::class,'show']);


Route::get('*', function () {
    return view('admin.pnf');
});