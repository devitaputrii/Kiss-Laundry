<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('page.home');
});

<<<<<<< HEAD
Route::get('/home', function () {
    return view('page.home');
});



=======
>>>>>>> 4614f932f65ef1a879fb9d4bcd8822c785e225d4
Route::get('/galeri', function () {
    return view('page.galeri');
});

Route::get('/keluhan', function () {
    return view('page.keluhan');
<<<<<<< HEAD
});

Route::get('/login', function () {
    return view('page.login');
=======
>>>>>>> 4614f932f65ef1a879fb9d4bcd8822c785e225d4
});