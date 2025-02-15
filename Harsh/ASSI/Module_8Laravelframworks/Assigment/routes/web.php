<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('.website.home');
});

Route::get('/blog', function () {
    return view('.website.blog');
});

Route::get('/category', function () {
    return view('.website.category');
});

Route::get('/contact', function () {
    return view('.website.contact');
});

Route::get('/single', function () {
    return view('.website.single');
});

Route::get('/login', function () {
    return view('.website.login');
});

Route::get('/signup', function () {
    return view('.website.login');
});

Route::get('/profile', function () {
    return view('.website.user_profile');
});

Route::get('*', function () {
    return view('website.pnf');
});
