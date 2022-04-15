@extends('layouts.main')

@section('container')
    <div class="row justify-content-center text-center">
        <div class="col-lg-6 col-md-10 col-sm-12">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal">Please Register</h1>
                <form method="POST" action="">
                    <div class="form-floating">
                        <input placeholder="Name" type="text" class="form-control rounded-0 rounded-top" id="floatingInput"
                            name="name" />
                        <label for="floatingInput">Name</label>
                    </div>

                    <div class="form-floating">
                        <input placeholder="Username" type="text" class="form-control rounded-0" id="floatingInput"
                            name="username" />
                        <label for="floatingInput">Username</label>
                    </div>

                    <div class="form-floating">
                        <input placeholder="Email" type="email" class="form-control rounded-0" id="floatingInput"
                            name="email" />
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating">
                        <input placeholder="Password" type="password" class="form-control rounded-0 rounded-bottom"
                            id="floatingPassword" name="password" />
                        <label for="floatingPassword">Password</label>
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
