@extends('front.layouts.master')

@section('page_title' , 'فراموشی رمز عبور')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">بازیابی رمز عبور</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">بازیابی رمز عبور</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->
    <!-- ========================== SignUp Elements ============================= -->
    <section class="log-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-11">

                    <div class="row no-gutters justify-content-center position-relative log_rads">

                        <div class="col-md-8 position-static p-4 border">
                            <div class="log_wraps">
                                <a href="{{route('home')}}" class="log-logo_head"><img src="/front/img/logo.png"
                                                                                class="img-fluid" width="200"
                                                                                alt=""/></a>
                                <div class="log__heads">
                                    <h4 class="mt-0 logs_title">بازیابی <span class="theme-cl">رمز عبور</span></h4>
                                </div>
                                <form action="{{route('forgot.password.token')}}" method="POST" autocomplete="off"
                                      id="forgot_password_token">
                                    @csrf
                                    <div class="form-group">
                                        <label>لطفا کد فرستاده شده را وارد کنید</label>
                                        <input type="text" class="form-control" name="token" id="token" value="{{old('token')}}">
                                        @error('token')
                                        <span class="text-danger d-block mt-1">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <a onclick="event.preventDefault();document.getElementById('forgot_password_token').submit()"
                                           class="btn btn_apply w-100">بازیابی رمز</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Login Elements ============================= -->
@endsection
