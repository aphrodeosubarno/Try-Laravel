@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col">
            <article>
                <h2 class="mb-3">{{ $post->title }}</h2>
                <h5 class="mb-4">Write by {{ $post->user->name }} in <a
                        href="/cateogries/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
                {!! $post->body !!}
            </article>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="/posts" class="btn btn-success">&laquo; Back to Posts</a>
            <a href="/categories/{{ $post->category->slug }}" class="btn btn-primary">&laquo; Back to Categories</a>
        </div>
    </div>
@endsection
