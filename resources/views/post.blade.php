@extends('layouts.main')
@section('container')
    <div class="row justify-content-center my-3">
        <div class="col-md-8">
            <article>
                <h2 class="mb-3 text-center">{{ $post->title }}</h2>
                <h5 class=" text-center">Write by
                    <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">
                        {{ $post->user->name }}
                    </a> in
                    <a href="/posts?category={{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </h5>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                        class="img-fluid my-4 rounded">
                @else
                    <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid my-4 rounded">
                @endif

                {!! $post->body !!}
            </article>
            <div class="mt-4">
                <a href="/posts" class="btn btn-success">
                    &laquo; Back to Posts
                </a>
            </div>
        </div>
    </div>
@endsection
