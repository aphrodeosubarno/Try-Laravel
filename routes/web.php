<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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
	return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
	return view('about', [
		'nama' => 'Deo Subarno',
		'email' => 'aprodeosubarno@gmail.com',
		'pekerjaan' => 'Software Developer',
		'image' => 'kon.jpg',
		'title' => 'About',
	]);
});

// All Posts
Route::get('/posts', [PostController::class, 'index']);
// Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
// All Categories
Route::get('/categories', [CategoryController::class, 'index']);
// Single Category
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
