@extends('layouts.main')
@section('container')
    <div class="row mb-3 justify-content-center">
        <h1 class="mb-4 mt-2 text-center">{{ $title }}</h1>
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Cari Posts...">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button" id="button-addon2">
                            Button
                        </button>
                    </div>
                </div>
            </form>
        </div>
        @if ($posts->count() > 0)
            <div class="col-12">
                <div class="card mb-5 p-2" style="box-shadow: 6px 6px 8px rgba(0,0,0,0.15)">
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
            </div>

            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-5 d-flex justify-content-between flex-column">
                    <div class="card border border-2 border-light"
                        style="min-height: 100%; box-shadow: 6px 6px 8px rgba(0,0,0,0.15)">
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
                </div>
            @endforeach
        @else
            <div class="col mt-2">
                <p class="text-center fs-4">Post Not Found ...</p>
            </div>
        @endif


    </div>
@endsection
