@extends('layouts.app')

@section('content')
    <div class="section login-register-section section-padding">
        <div class="container">

            <!-- Login & Register Wrapper Start -->
            <div class="login-register-wrap">
                <div class="row gx-5">
                    <div class="col-lg-6 offset-lg-3">

                        <!-- Login & Register Box Start -->
                        <div class="login-register-box">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="title">{{ __('Login') }}</h2>
                            </div>
                            <!-- Section Title End -->
                            <div></div>
                            <div class="login-register-form">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="single-form">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email"value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>
                                        @error('email')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="single- form">
                                        <input type="password" class="form-control" placeholder="Password" name="password"
                                            required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="single-form form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label"
                                            for="flexCheckDefault">{{ __('Remember me') }}</label>
                                    </div>
                                    <div class="form-btn">
                                        <button class="btn-2"> {{ __('Login') }}</button>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- Login & Register Box End -->

                    </div>
                </div>
            </div>
            <!-- Login & Register Wrapper End -->

        </div>
    </div>
    <!-- Login & Register End -->
@endsection
