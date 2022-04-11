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
			'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos perspiciatis sunt sequi voluptates minima magni a sapiente consequatur odit odio repudiandae, aspernatur ad nam voluptatum suscipit, earum iste quidem veritatis fugiat eius? Laudantium in voluptatum facilis porro nobis alias optio aperiam itaque aliquam! Minima dignissimos delectus harum voluptatum porro fuga distinctio unde. Ea explicabo facere officiis impedit vel illum adipisci ratione dolorum at nam laudantium ad, facilis eligendi iusto repellendus autem hic esse voluptate culpa aut tempora voluptatum recusandae. Excepturi!'
		],
		[
			'title' => 'Judul Post Kedua',
			'slug' => 'judul-post-kedua',
			'author' => 'Inuyama Aoi',
			'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam aperiam eius minus, vero velit delectus similique suscipit animi commodi veniam sed consequuntur debitis optio dicta expedita voluptate tempora iure, corporis autem culpa totam. Labore soluta fugiat ducimus! Numquam, odio sapiente maxime exercitationem cupiditate dolorum pariatur modi dolores aliquid asperiores laborum placeat illum consequuntur tempore dicta. Voluptatum ratione molestiae eius rem officiis cupiditate. Nulla impedit explicabo, officiis ex cumque reprehenderit inventore velit labore voluptas sapiente deleniti numquam fugiat ea qui possimus dolores? Nam reiciendis animi suscipit quam rem numquam reprehenderit possimus pariatur facilis hic commodi modi, culpa corrupti similique ad alias provident autem ut sed exercitationem corporis. Tempora est facere officia vel, optio, consequatur iste natus obcaecati dolor consectetur quisquam pariatur?'
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
			'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos perspiciatis sunt sequi voluptates minima magni a sapiente consequatur odit odio repudiandae, aspernatur ad nam voluptatum suscipit, earum iste quidem veritatis fugiat eius? Laudantium in voluptatum facilis porro nobis alias optio aperiam itaque aliquam! Minima dignissimos delectus harum voluptatum porro fuga distinctio unde. Ea explicabo facere officiis impedit vel illum adipisci ratione dolorum at nam laudantium ad, facilis eligendi iusto repellendus autem hic esse voluptate culpa aut tempora voluptatum recusandae. Excepturi!'
		],
		[
			'title' => 'Judul Post Kedua',
			'slug' => 'judul-post-kedua',
			'author' => 'Inuyama Aoi',
			'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam aperiam eius minus, vero velit delectus similique suscipit animi commodi veniam sed consequuntur debitis optio dicta expedita voluptate tempora iure, corporis autem culpa totam. Labore soluta fugiat ducimus! Numquam, odio sapiente maxime exercitationem cupiditate dolorum pariatur modi dolores aliquid asperiores laborum placeat illum consequuntur tempore dicta. Voluptatum ratione molestiae eius rem officiis cupiditate. Nulla impedit explicabo, officiis ex cumque reprehenderit inventore velit labore voluptas sapiente deleniti numquam fugiat ea qui possimus dolores? Nam reiciendis animi suscipit quam rem numquam reprehenderit possimus pariatur facilis hic commodi modi, culpa corrupti similique ad alias provident autem ut sed exercitationem corporis. Tempora est facere officia vel, optio, consequatur iste natus obcaecati dolor consectetur quisquam pariatur?'
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
