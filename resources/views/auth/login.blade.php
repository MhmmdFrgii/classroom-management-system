@extends('layouts.guest')

@section('content')
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-secondary"
        style="background-image: url('{{ asset('assets/images/bg-pattern-2.png') }}'); background-size: cover;">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4 font-weight-bold">Welcome Back</h3>
                    <p class="text-center text-muted mb-4">Please log in to continue</p>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success text-center">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" class="form-control form-control-lg"
                                value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" name="password" class="form-control form-control-lg"
                                required placeholder="Enter your password">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                            <label class="form-check-label" for="remember_me">Remember me</label>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" class="btn btn-primary btn-lg w-100 mt-4 btn-hover">
                            Log in
                        </button>
                    </form>

                    {{-- <!-- Forgot Password & Sign Up -->
                    <div class="text-center mt-3">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">
                                Forgot your password?
                            </a>
                        @endif
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}"
                                class="text-primary text-decoration-none">Sign up</a></p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-hover:hover {
            background-color: #007bff;
            color: #fff;
            transform: scale(1.02);
            transition: transform 0.2s ease-in-out;
        }
    </style>
@endsection
