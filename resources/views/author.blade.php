@extends('layouts.main')
@section('container')
    <div class="row mb-3">
        <h3 class="mb-4">Author: {{ $author }}</h3>
        @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card text-dark bg-light border-secondary mb-3">
                    <div class="card-header fs-4 text-center">{{ $post->title }}</div>
                    <div class="card-body">
                        <h6 class="mb-3">Write by <a href="/author/{{ $post->user->username }}"
                                class="text-decoration-none">{{ $post->user->name }}</a> in <a
                                href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none">{{ $post->category->name }}</a></h6>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More ...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
