<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
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


Route::get('/login', function () {
    return view('website.login');
});

Route::get('/signup', function () {
    return view('website.signup');
});

Route::get('*', function () {
    return view('website.pnf');
});



//-----------------------------Adnin-------------------------------//

Route::get('/admin_login', function () {
    return view('admin.index');
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

Route::get('/manage_student', function () {
    return view('admin.manage_student');
});

Route::get('*', function () {
    return view('admin.pnf');
});