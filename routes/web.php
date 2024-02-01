<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

// home route
Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// about route
Route::get('/about', function () {
    return view('about', [
        'name' => 'Franky',
        'email' => 'baboon@student.ac.id',
        'title' => 'About'
    ]);
});

// posts route
Route::get('/posts', [PostController::class, 'index']);

// single post route
Route::get('/posts/{slug}', [PostController::class, 'show']);
