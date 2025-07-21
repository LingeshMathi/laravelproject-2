<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about',function () {
    return view('pages.about');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/blog-details', function () {
    return view('pages.blog-details');
});
Route::get('/error', function () {
    return view('pages.error');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/register', function () {
    return view('pages.register');
});

  


