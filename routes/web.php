<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;

Route::resource('students', StudentController::class);

Route::resource('grades', GradeController::class);
Route::resource('subjects', SubjectController::class);



Route::get('/', function () {
    return view('home');
});


Route::get('/about',[App\Http\Controllers\Homecontroller::class,'about'])->name('about');

Route::get('/contact',[App\Http\Controllers\Homecontroller::class,'contact'])->name('contact');

Route::get('/blog',[App\Http\Controllers\Homecontroller::class,'blog'])->name('blog');

Route::get('/blogdetails',[App\Http\Controllers\Homecontroller::class,'blogdetails'])->name('blogdetails');

Route::get('/login',[App\Http\Controllers\Homecontroller::class,'login'])->name('login');

Route::get('/error',[App\Http\Controllers\Homecontroller::class,'error'])->name('error');

Route::get('/',[App\Http\Controllers\Homecontroller::class,'home'])->name('home');

Route::get('/register',[App\Http\Controllers\Homecontroller::class,'register'])->name('register');



// Route::get('/about',function () {
//     return view('pages.about');
// });
// Route::get('/blog', function () {
//     return view('pages.blog');
// });
// Route::get('/blog-details', function () {
//     return view('pages.blog-details');
// });
// Route::get('/error', function () {
//     return view('pages.error');
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// });
// Route::get('/login', function () {
//     return view('pages.login');
// });
// Route::get('/register', function () {
//     return view('pages.register');
// });












