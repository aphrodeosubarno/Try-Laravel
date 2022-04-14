@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col">
            <h2 class="mb-4 text-center">All Categories</h2>
            <ul class="list-group">
                @foreach ($categories as $category)
                    <li class="list-group-item d-flex justify-content-between pt-3">
                        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                        <p>{{ $category->posts->count() }} Posts</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
