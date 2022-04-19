@extends('dashboard.layouts.main')
@section('container')
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success">
                    <span data-feather="arrow-left"></span> Back to all my posts
                </a>
                <a href="" class="btn btn-warning">
                    <span data-feather="edit"></span> Edit
                </a>
                <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="d-inline"
                    onclick="return confirm('Delete Post?')">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger ">
                        <span data-feather="trash-2"></span>
                        Delete
                    </button>
                </form>

                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                    class="img-fluid my-4 rounded">

                <div class="fs-6">
                    {!! $post->body !!}
                </div>
            </article>
        </div>
    </div>
@endsection
