@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col">
            <h1>About Me</h1>
            <h3>Nama: {{ $nama }}</h3>
            <p>Email: {{ $email }}</p>
            <p>Pekerjaan: {{ $pekerjaan }}</p>
            <img src="img/{{ $image }}" alt="{{ $nama }}" width="300">
        </div>
    </div>
@endsection
