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
|
*/

Route::get('/', function () {
    return view('biodata');
});

Route::get('/hal2', function () {
    return view('halaman2');
});
 
Route::get('/hal3', function () {
    return view('halaman3');
});

Route::get('/hal4', function () {
    return view('halaman4');
});
