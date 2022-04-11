@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col">
            <article>
                <h1>{{ $post['title'] }}</h1>
                <h5>{{ $post['author'] }}</h5>
                <p>{{ $post['body'] }}</p>
            </article>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="/blog">Back to Posts</a>
        </div>
    </div>
@endsection
