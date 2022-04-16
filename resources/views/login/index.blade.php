@extends('layouts.main')

@section('container')
    <div class="row justify-content-center text-center">
        <div class="col-lg-6 col-md-10 col-sm-12">
            <main class="form-signin">

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                <form method="POST" action="">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email" />
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="w-100 btn mt-3 btn-primary" type="submit">
                        Login
                    </button>

                </form>
                <small class="mt-3 d-block">Don't have account? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection
