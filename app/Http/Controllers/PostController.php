<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All Article',
            'home' => 'Home',
            'posts' => Post::with(['category', 'user'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', ['title' => 'Single Post', 'post' => $post]);
    }
}
