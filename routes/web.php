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

Route::get('/about', function () {
	$data = [
		'nama' => 'Deo Subarno',
		'email' => 'aprodeosubarno@gmail.com',
		'pekerjaan' => 'Software Developer',
		'image' => 'kon.jpg'
	];
	return view('about', $data);
});

Route::get('/blog', function () {
	return view('posts');
});
