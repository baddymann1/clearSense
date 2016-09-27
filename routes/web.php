<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.aboutUs');
});

Route::get('/services', function () {
    return view('page.ourService');
});


Route::get('/contact', function () {
    return view('page.contactUs');
});


Route::get('/portfolios', function () {
    return view('page.ourWork');
});
