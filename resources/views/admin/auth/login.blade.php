@extends('layouts.admin.auth')
@section('main')
    <div class="login-form-bg h-100" style="background-image: url({{ asset('front-end/images/Sponser\ Pro.png') }}); background-size:cover; background-position:center;">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html" style="display:block">
                                <img class="logo-icon mb-3"
                            src="{{ asset('front-end/assets/images/logo.png') }}" alt="logo">
                                    <h4>{{ env('APP_NAME') . ' Dashboard Login' }}</h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('admin.login') }}">
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                            required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
