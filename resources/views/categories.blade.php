@extends('layouts.main')
@section('container')
    <div class="row">
        <h2 class="my-2">All Categories</h2>
        @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/categories/{{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center"
                            style="background-color: rgba(0, 0, 0, 0.3)">
                            <h3 class="card-title ">
                                {{ $category->name }}
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
