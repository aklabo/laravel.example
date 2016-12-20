<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
    return view('welcome');
});

Route::get('/floating-boxes', function () {
    return view('floating-boxes');
});

Route::get('/react-examples', function () {
    return view('react-examples/index');
});

Route::get('/react-examples/index', function () {
    return view('react-examples/index');
});

Route::get('/react-examples/hello', function () {
    return view('react-examples/hello');
});


