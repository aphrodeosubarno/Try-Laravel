@extends('layouts.main')

@section('container')
    <div class="row justify-content-center text-center">
        <div class="col-lg-6 col-md-10 col-sm-12">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal">Please Register</h1>
                <form method="POST" action="/register">
                    @csrf

                    <div class="form-floating">
                        <input placeholder="Name" type="text"
                            class="form-control rounded-0 rounded-top @error('name') is-invalid @enderror" id="floatingInput"
                            name="name" required value="{{ old('name') }}" />
                        <label for="floatingInput">Name</label>
                        @error('name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback my-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input placeholder="Username" type="text"
                            class="form-control rounded-0 @error('username') is-invalid @enderror" id="floatingInput"
                            name="username" required value="{{ old('username') }}" />
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback my-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input placeholder="Email" type="email"
                            class="form-control rounded-0 @error('email') is-invalid @enderror" id="floatingInput"
                            name="email" required value="{{ old('email') }}" />
                        <label for="floatingInput">Email</label>
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback my-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input placeholder="Password" type="password"
                            class="form-control rounded-0 rounded-bottom @error('password') is-invalid @enderror"
                            id="floatingPassword" name="password" required />
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback my-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-primary mt-3" type="submit">
                        Register
                    </button>

                </form>
                <small class="mt-3 d-block">Have account? <a href="/login">Login Now!</a></small>
            </main>
        </div>
    </div>
@endsection
