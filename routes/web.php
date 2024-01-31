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


// default route
Route::get('/', function () {
    return view('welcome');
});

// custom route
Route::get('/about', function () {
    return view('about', [
        "name" => "Franky",
        "email" => "baboon@student.ac.id"
    ]);
});
