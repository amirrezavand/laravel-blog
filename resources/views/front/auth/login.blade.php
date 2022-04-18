@extends('front.layouts.master')

@section('content')
    <!-- Start Login Area -->
    <section class="login-area ptb-100">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="login-image">
                        <img src="assets/img/marketing.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="login-form">
                        <h3>Welcome Back!</h3>
                        <p>Please login to your account.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkme">
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
