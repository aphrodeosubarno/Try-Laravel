@extends('layouts.main')
@section('container')
    <div class="row mb-3">
        <h2 class="mb-5 mt-2">{{ $title }}</h2>
        @foreach ($posts as $post)
            <div class="col-12">
                <article class="mb-5 border-bottom pb-4">
                    <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>

                    <p>Written by : <a href="/author/{{ $post->user->username }}"
                            class="text-decoration-none">{{ $post->user->name }}</a> in <a
                            href="/categories/{{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a></p>

                    <p>{{ $post->excerpt }}</p>
                </article>
            </div>
        @endforeach
    </div>
@endsection
