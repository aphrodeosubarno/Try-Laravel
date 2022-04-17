@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex flex-column justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mb-4">Welcome back, {{ auth()->user()->name }}</h1>
        <div class="jumbotron">
            <h1 class="mb-4">Hai {{ auth()->user()->name }}</h1>
            <p class="lead">Ini merupakan website yang saya buat hasil belajar Laravel 8 dari channel Web
                Programming Unpas</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary" href="/posts">Show Posts</a>
        </div>
    </div>
@endsection
