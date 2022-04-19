<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

// Home
Route::get('/', function () {
  return view('home', ['title' => 'Home']);
});

// About
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

// Login & Logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'new'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create']);

// Dashboard Home
Route::get('/dashboard', function () {
  return view('dashboard.main.index', [
    'title' => 'User Dashboard'
  ]);
})->middleware('auth');

// Dashboard Posts
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// 
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');
