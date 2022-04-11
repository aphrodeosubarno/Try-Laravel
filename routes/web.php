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
	return view('home', [
		'title' => 'Home',
	]);
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



Route::get('/blog', function () {
	$blog_posts = [
		[
			'title' => 'Judul Post Pertama',
			'slug' => 'judul-post-pertama',
			'author' => 'Deo Subarno',
			'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos perspiciatis sunt sequi voluptates minima magni a sapiente consequatur odit odio repudiandae, aspernatur ad nam voluptatum suscipit'
		],
		[
			'title' => 'Judul Post Kedua',
			'slug' => 'judul-post-kedua',
			'author' => 'Inuyama Aoi',
			'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam aperiam eius minus, vero velit delectus similique suscipit animi commodi veniam sed consequuntur debitis optio dicta expedita voluptate tempora iure, corporis autem culpa totam. Labore soluta fugiat ducimus! Numquam, odio sapiente maxime exercitationem cupiditate '
		],
	];

	return view('posts', [
		'title' => 'Post',
		'posts' => $blog_posts,
	]);
});

// Single Post
Route::get('/blog/{slug}', function ($slug) {
	$blog_posts = [
		[
			'title' => 'Judul Post Pertama',
			'slug' => 'judul-post-pertama',
			'author' => 'Deo Subarno',
			'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos perspiciatis sunt sequi voluptates minima magni a sapiente consequatur odit odio repudiandae, aspernatur ad nam voluptatum suscipit'
		],
		[
			'title' => 'Judul Post Kedua',
			'slug' => 'judul-post-kedua',
			'author' => 'Inuyama Aoi',
			'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam aperiam eius minus, vero velit delectus similique suscipit animi commodi veniam sed consequuntur debitis optio dicta expedita voluptate tempora iure, corporis autem culpa totam. Labore soluta fugiat ducimus! Numquam, odio sapiente maxime exercitationem cupiditate '
		],
	];

	$single_post = [];
	foreach ($blog_posts as $post) {
		if ($post['slug'] === $slug) {
			$single_post = $post;
		}
	}

	return view('post', [
		'title' => 'Single Post',
		'post' => $single_post,
	]);
});
