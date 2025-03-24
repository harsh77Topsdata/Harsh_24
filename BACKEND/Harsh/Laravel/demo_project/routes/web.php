<?php

use Illuminate\Support\Facades\Route;


//website
Route::get('/', function () {
    return view('website.home');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/blog', function () {
    return view('website.blog');
});

Route::get('/chef', function () {
    return view('website.chef');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/gallery', function () {
    return view('website.gallary');
});

Route::get('/menu', function () {
    return view('website.menu');
});

Route::get('/pricing', function () {
    return view('website.pricing');
});

Route::get('/testimonials', function () {
    return view('website.testimonials');
});


