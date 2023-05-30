@extends('layouts.app')

@section('content')
    <div class="section login-register-section section-padding">
        <div class="container">

            <!-- Login & Register Wrapper Start -->
            <div class="login-register-wrap">
                <div class="row gx-5">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="login-register-box">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="title">{{ __('Register') }}</h2>
                            </div>
                            <!-- Section Title End -->

                            <div class="login-register-form">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="single-form">
                                        <input type="text" class="form-control" placeholder="Username " name="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="single-form">
                                        <input type="text" class="form-control" placeholder="email " name="email" >
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="single-form">
                                        <input type="password" class="form-control" placeholder="Password "name="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="single-form">
                                        <input type="password" class="form-control" placeholder="Confirm Password " name="password_confirmation">
                                    </div>
                                    <div class="form-btn">
                                        <button class="btn-2"> {{ __('Register') }}</button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        @endsection
