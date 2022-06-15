@extends('front.layouts.master')

@section('content')
    <!-- Start Signup Area -->
    <section class="signup-area ptb-100">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="signup-image">
                        <img src="/front/assets/img/marketing.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="signup-form">
                        <h3>Create your Account</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
                                    </div>
                                </div>

{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input type="checkbox" class="form-check-input" id="checkme">--}}
{{--                                        <label class="form-check-label" for="checkme">Keep me Login</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Signup Now!</button>
                                    <br>
                                    <span>Already a registered user? <a href="{{route('login')}}">Login!</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Signup Area -->
@endsection
