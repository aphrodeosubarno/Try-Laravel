@extends('dashboard.layouts.main')
@section('container')
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success">
                    <span data-feather="arrow-left"></span> Back to all my posts
                </a>
                <a href="" class="btn btn-warning">
                    <span data-feather="edit"></span> Edit
                </a>
                <a href="" class="btn btn-danger">
                    <span data-feather="trash"></span> Delete
                </a>

                <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid my-4 rounded">

                <div class="fs-6">
                    {!! $post->body !!}
                </div>
            </article>
        </div>
    </div>
@endsection
