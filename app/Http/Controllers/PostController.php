<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', ['title' => 'Post', 'posts' => Post::getAll()]);
    }

    public function show($slug)
    {
        return view('post', ['title' => 'Single Post', 'post' => Post::getOneBySlug($slug)]);
    }
}
