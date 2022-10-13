@extends('front.layouts.master')

@section('page_title' , 'ثبت نام')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">ثبت نام</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->
    <!-- ============================ Register ================================== -->
    <section class="pt-0">
        <div class="container">

            <div class="row @if($is_verify_phone) d-none @endif" id="verifyPhone">
                <div class="col-md-12">
                    <div class="cart_totals checkout light_form mb-4">
                            <a href="/" class="log-logo_head"><img
                                    src="/front/img/logo.png"
                                    class="img-fluid" width="80"
                                    alt=""
                                    style="width: 200px;"/></a>
                        <div class="log__heads mt-4">
                            <h4 class="mt-0 logs_title">ثبت <span class="theme-cl">حساب کاربری</span> (مرحله اول)</h4>
                        </div>

                        <form action="{{route('verify_phone')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber">تلفن همراه</label>
                                        <input type="text" class="form-control" id="phoneNumber" name="phone_number"
                                               value="{{old('phone_number')}}">
                                        @error('phone_number')
                                        <span class="text-danger d-block mt-1">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-xs-6 text-center position-relative">
                                    <div class="form-group text-right">
                                        <!-- <label>Captcha Code</label> -->
                                        <div style="position: absolute;top: 36px;right: 25px;">
                                            <img src="/captcha" class="captcha-image">
                                            <i class="fa fa-undo"
                                               style="position: absolute;left: 31px;top: 13px; cursor:pointer;"
                                               onclick="getCaptcha();"></i>
                                        </div>
                                        <label for="phoneNumber">کد کپچا</label>
                                        <input
                                            tabindex="-1"
                                            type="text"
                                            name="captcha"
                                            class="form-control text-left" style="padding-left: 45px;direction: ltr;"/>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn checkout_btn">تایید</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center d-none" id="verifyOtp">
                <div class="col-md-6">
                    <div class="cart_totals checkout light_form mb-4">
                        <a href="{{route('home')}}" class="log-logo_head"><img src="/front/img/logo.png"
                                                                               class="img-fluid" width="80"
                                                                               alt="" style="width: 200px;"/></a>
                        <div class="log__heads mt-4">
                            <h4 class="mt-0 logs_title">ثبت <span class="theme-cl">حساب کاربری</span> (مرحله دوم)</h4>
                        </div>

                        <form action="{{route('verify_otp')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="phoneNumber">کد تایید 6 رقمی</label>
                                        <input type="text" class="form-control" id="otpCode" name="otp_code"
                                               value="{{old('otp_code')}}">
                                        @error('otp_code')
                                        <span class="text-danger d-block mt-1">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn checkout_btn">تایید</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row @if(!$is_verify_phone) d-none @endif" id="register">
                <div class="col-md-12">
                    <div class="cart_totals checkout light_form mb-4">
                        <a href="{{route('home')}}" class="log-logo_head"><img src="/front/img/logo.png"
                                                                               class="img-fluid" width="80"
                                                                               alt="" style="width: 200px;"/></a>
                        <div class="log__heads mt-4">
                            <h4 class="mt-0 logs_title">ثبت <span class="theme-cl">حساب کاربری</span> (مرحله سوم)</h4>
                        </div>
                        <form action="{{route('register')}}" method="POST" class="row" autocomplete="off">
                            @csrf
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="first_name">نام</label>
                                    <input type="text" class="form-control" name="first_name" id="first_name"
                                           value="{{old('first_name')}}">

                                    @error('first_name')
                                    <span class="text-danger d-block mt-1">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="lastName">نام خانوادگی</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name"
                                           value="{{old('last_name')}}">
                                    @error('last_name')
                                    <span class="text-danger d-block mt-1">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>








                            <div class="col-lg-6 col-md-6">
                                <div class="form-group position-relative">
                                    <label for="password">رمز عبور</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                           value="{{old('password')}}">

                                    <span></span>
                                    @error('password')
                                    <span class="text-danger d-block mt-1">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="password_confirmation">تکرار رمز عبور</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                           id="password_confirmation"
                                           value="{{old('password_confirmation')}}">
                                    @error('password')
                                    <span class="text-danger d-block mt-1">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn checkout_btn">تایید</button>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Register End ================================== -->

@endsection

@section('script')
@endsection
