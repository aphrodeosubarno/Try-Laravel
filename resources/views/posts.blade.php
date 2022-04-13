@extends('layouts.main')
@section('container')
    <div class="row mb-3">
        <h1 class="mb-4 text-center">Article</h1>
        @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card text-dark bg-light border-secondary mb-3">
                    <div class="card-header fs-4 text-center">{{ $post->title }}</div>
                    <div class="card-body">
                        <h6 class="mb-3">Write by {{ $post->user->name }} in <a
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
