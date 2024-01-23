<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| cd laravel-test
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/memnu', function () {
    return view('memnu');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/sidebar2', function () {
    return view('sidebar2');
});

Route::get('/test', function () {
    return view('test');
});
