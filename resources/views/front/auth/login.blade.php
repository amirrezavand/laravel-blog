@extends('front.layouts.master')

@section('page_title' , 'ورود')

@section('content')

    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">ورود</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ورود</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ========================== SignUp Elements ============================= -->
    <section class="log-space ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-11">

                    <div class="row no-gutters justify-content-center position-relative log_rads">
                        <div class="col-md-6 position-static p-4 border">
                            <div class="log_wraps">
                                <a href="/" class="log-logo_head"><img
                                        src="/front/img/logo.png"
                                        class="img-fluid" width="80"
                                        alt=""
                                        style="width: 200px;"/></a>
                                <div class="log__heads mt-4">
                                    <h4 class="mt-0 logs_title">ورود به <span class="theme-cl">حساب کاربری</span></h4>
                                </div>
                                <form action="{{route('login')}}" method="POST" id="login" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <label for="national_code">شماره موبایل*</label>
                                        <input type="text" class="form-control" id="phone_number"
                                               value="{{old('phone_number')}}" name="phone_number">
                                        {{--                                        @error('national_code')--}}
                                        {{--                                        <span class="text-danger d-block mt-1">{{$message}}</span>--}}
                                        {{--                                        @enderror--}}
                                    </div>

                                    <div class="form-group">
                                        <label for="password">رمز عبور*<a href="{{route('forgot.password')}}"
                                                                          class="elio_right">رمز
                                                خود را
                                                فراموش کرده اید؟</a></label>
                                        <input type="password" id="password" class="form-control"
                                               value="{{old('password')}}"
                                               name="password">
                                        {{--                                        @error('password')--}}
                                        {{--                                        <span class="text-danger d-block mt-1">{{$message}}</span>--}}
                                        {{--                                        @enderror--}}
                                    </div>
                                    <div class="form-group text-right" style="position: relative;">
                                        <!-- <label>Captcha Code</label> -->
                                        <div style="position: absolute;top: 40px;right: 25px;">
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
                                        @error('captcha')
                                        <span class="text-danger d-block mt-1">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a
                                            onclick="event.preventDefault();document.getElementById('login').submit()"
                                            class="btn btn_apply w-100">ورود</a>
                                    </div>
                                </form>

                                <div class="form-group text-center mb-0 mt-3">
                                    آیا هنوز ثبت نام نکرده اید؟ <a href="{{route('register')}}" class="theme-cl">ثبت
                                        نام</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Login Elements ============================= -->
@endsection


@section('script')
    <script>
        @error('password')
        showToast('خطا', 'اطلاعات نامعتبر است.', 'error');
        @enderror
    </script>
@endsection
