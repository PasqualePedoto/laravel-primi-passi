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
    return view('home');
});

Route::get('/Napoli', function () {
    return view('Napoli',['city' => 'Napoli']);
});

Route::get('/Milano', function () {
    return view('Milano',['city' => 'Milano']);
});

Route::get('/Torino', function () {
    return view('Torino',['city' => 'Torino']);
});

Route::get('/SanMartino', function () {
    return view('SanMartino',['city' => 'San Martino']);
});
