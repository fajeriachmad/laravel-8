<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
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
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// form handler


// categories route
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// single category route
// Route::get('/categories/{category:slug}', [PostController::class, 'showByCategory']);
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('category', [
//         'title' => $category->name,
//         'posts' => $category->posts,
//         'category' => $category->name
//     ]);
// });

// single user route
// Route::get('/authors/{author:username}', [PostController::class, 'showByAuthor']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
