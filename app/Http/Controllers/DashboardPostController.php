<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::with(['category', 'user'])
                ->where('user_id', auth()->user()->id)
                ->latest()
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'title' => ['required', 'min:2', 'max:255', 'unique:posts'],
            'category_id' => ['required'],
            'body' => ['required', 'min:10']
        ]);

        $validated_data['slug'] = Str::slug($request->title);
        $validated_data['user_id'] = auth()->user()->id;
        $validated_data['excerpt'] = Str::limit(strip_tags($request->body));

        Post::create($validated_data);

        $request->session()->flash('success', 'Post Created!');

        return redirect('/dashboard/posts', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'category_id' => ['required'],
            'body' => ['required', 'min:10'],
        ];

        if ($request->title != $post->title) {
            $rules['title'] = ['required', 'min:2', 'max:255', 'unique:posts'];
        }

        $validated_data = $request->validate($rules);

        $validated_data['slug'] = Str::slug($request->title);
        $validated_data['user_id'] = auth()->user()->id;
        $validated_data['excerpt'] = Str::limit(strip_tags($request->body));

        Post::where('id', $post->id)->update($validated_data);

        return redirect('/dashboard/posts')->with('success', 'Post Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::find($post->id)->delete();
        return redirect('/dashboard/posts')->with('success', 'Success Deleted Post!');
    }
}
