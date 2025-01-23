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

Route::get('dashboard', function () {
    return view('admin.index');
});