@extends('front.layouts.master')

@section('page_title','Login')

@section('content')
    <!-- Start Login Area -->
    <section class="login-area ptb-100">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="login-image">
                        <img src="/front/assets/img/marketing.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="login-form">
                        <h3>Welcome Back!</h3>
                        <p>Please login to your account.</p>
                        <form method="POST" action="{{ route('login') }}" autocomplete="off" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{old('email')}}">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkme" name="remember">
                                        <label class="form-check-label" for="checkme">Keep me Login</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 text-right">
                                    <p class="forgot-password"><a href="#">Forgot Password?</a></p>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Login Now!</button>
                                    <br>
                                    <span>New User? <a href="{{route('signup')}}">Sign Up!</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login Area -->

@endsection
