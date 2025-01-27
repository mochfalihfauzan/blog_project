@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-register w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                <form action="/register" method="POST">

                    {{-- CSRF Token --}}
                    @csrf

                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name')is-invalid @enderror"
                            name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="floatingInput">Name</label>

                        {{--  Menampilkan pesan error --}}
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control @error('username')is-invalid @enderror" name="username"
                            id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="floatingInput">Username</label>

                        {{--  Menampilkan pesan error --}}
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-floating">
                        <input type="email" class="form-control @error('email')is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        {{--  Menampilkan pesan error --}}
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom @error('password')is-invalid @enderror"
                            name="password" id="Password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        {{--  Menampilkan pesan error --}}
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already Registred? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>
@endsection
