@extends('layouts.main')
@section('container')
    <div class="row mb-3">
        <h2 class="mb-4 mt-2">{{ $title }}</h2>
        @if ($posts->count() > 0)
            <div class="card mb-5 p-2">
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->title }}">

                <div class="card-body text-center">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        <h5 class="card-title">{{ $posts[0]->title }}</h5>
                    </a>
                    <p>
                        <small class="text-muted">Written by :
                            <a href="/author/{{ $posts[0]->user->username }}" class="text-decoration-none">
                                {{ $posts[0]->user->name }}
                            </a> in
                            <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">
                                {{ $posts[0]->category->name }}
                            </a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>

                    <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>

            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-5 d-flex justify-content-between flex-column">
                    <div class="card">
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->title }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">
                                    {{ $post->title }}
                                </a>
                            </h5>
                            <p class="card-text">
                                <small>Written by :
                                    <a href="/author/{{ $post->user->username }}" class="text-decoration-none">
                                        {{ $post->user->name }}
                                    </a> in
                                    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                                        {{ $post->category->name }}
                                    </a>
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                    {{-- <article class="mb-5 border-bottom pb-4">
                        <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                        </h2>

                        <p>Written by : <a href="/author/{{ $post->user->username }}"
                                class="text-decoration-none">{{ $post->user->name }}</a> in <a
                                href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none">{{ $post->category->name }}</a></p>

                        <p>{{ $post->excerpt }}</p>
                    </article> --}}
                </div>
            @endforeach
        @else
            <div class="col mt-2">
                <p class="text-center fs-4">Post Not Found ...</p>
            </div>
        @endif


    </div>
@endsection
