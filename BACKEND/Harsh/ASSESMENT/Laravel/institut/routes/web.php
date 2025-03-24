<?php


use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TecherController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClubController;


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
Route::post('/user_auth',[StudentController::class,'user_auth']);

Route::get('/signup',[StudentController::class,'create']);
Route::post('/insert_signup',[StudentController::class,'store']);
Route::post('/student_logout',[StudentController::class,'student_logout']);
Route::get('/student_profile/{id}',[StudentController::class,'student_profile']);
Route::get('/edit_profile/{id}',[StudentController::class,'update']);

Route::get('*', function () {
    return view('website.pnf');
});



//-----------------------------Adnin-------------------------------//

Route::get('/admin_login',[AdminController::class,'admin_login']);
Route::post('/admin_auth',[AdminController::class,'admin_auth']);
Route::get('/admin_logout',[AdminController::class,'admin_logout']);


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/add_book',[BookController::class,'index']);
Route::post('/add_book',[BookController::class,'store']);
Route::get('/manage_book',[BookController::class,'show']);
Route::get('/manage_book/{id}',[BookController::class,'destroy']);

Route::get('/add_department',[DepartmentController::class,'index']);
Route::post('/add_department',[DepartmentController::class,'store']);
Route::get('/manage_department',[DepartmentController::class,'show']);
Route::get('/manage_book/{id}',[BookController::class,'destroy']);

Route::get('/add_teacher',[TecherController::class,'create']);
Route::post('/add_teacher',[TecherController::class,'store']);
Route::get('/manage_teacher',[TecherController::class,'show']);
Route::get('/manage_teacher/{id}',[BookController::class,'destroy']);

Route::get('/manage_contact',[ContactController::class,'show']);
Route::get('/manage_contact/{id}',[BookController::class,'destroy']);

Route::get('/manage_student',[StudentController::class,'show']);
Route::get('/manage_student/{id}',[StudentController::class,'destroy']);

Route::get('/add_club',[ClubController::class,'create']);
Route::post('/add_club',[ClubController::class,'store']);
Route::get('/manage_club',[ClubController::class,'show']);
Route::get('/manage_club/{id}',[clubController::class,'destroy']);


Route::get('*', function () {
    return view('admin.pnf');
});