@extends('layouts.main')
@section('container')
    <div class="row">
        <h2 class="mt-2 mb-4">All Categories</h2>
        @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card bg-dark text-white border-0" style="box-shadow: 6px 6px 8px rgba(0,0,0,0.2)">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center"
                            style="background-color: rgba(0, 0, 0, 0.3)">
                            <h4 class="card-title">
                                {{ $category->name }}&nbsp;({{ $category->posts->count() }} Posts)
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
