@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
        <div class="row mb-3">
            <div class="col">
                <article>
                    <h1>
                        <a href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}</a>
                    </h1>
                    <h5>By: {{ $post['author'] }}</h5>
                    <p>{{ $post['body'] }}</p>
                </article>
            </div>
        </div>
    @endforeach
@endsection
