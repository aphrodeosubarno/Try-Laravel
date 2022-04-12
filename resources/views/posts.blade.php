@extends('layouts.main')

@section('container')
    <div class="row mb-3">
        <h1 class="mb-3 text-center">Article</h1>
        @foreach ($posts as $post)
            <div class="col-4">
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header fs-4 text-center">{{ $post->title }}</div>
                    <div class="card-body">
                        <h5 class="card-title">By: {{ $post->author }}</h5>
                        <h5 class="card-title">Post at: {{ $post->published_at }}</h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
