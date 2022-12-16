@extends('front.layouts.master')

@section('page_title' , 'فراموشی رمز عبور')

@section('content')

    <!-- ========================== SignUp Elements ============================= -->
    <section class="log-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-11">

                    <div class="row no-gutters justify-content-center position-relative log_rads">

                        <div class="col-md-8 position-static p-4 border">
                            <div class="log_wraps">
                                <a href="{{route('home')}}" class="log-logo_head"><img src="/front/img/logo.png"
                                                                                       class="img-fluid" width="160"
                                                                                       alt=""/></a>
                                <div class="log__heads">
                                    <h4 class="mt-0 logs_title">بازیابی <span class="theme-cl">رمز عبور</span></h4>
                                </div>
                                <form action="{{route('new.password')}}" method="POST" autocomplete="off"
                                      id="new_password">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label>رمز عبور جدید</label>
                                        <input type="text" class="form-control" name="password" id="password" value="{{old('password')}}">
                                        @error('password')
                                        <span class="text-danger d-block mt-1">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">تکرار رمز عبور</label>
                                        <input type="text" class="form-control" name="password_confirmation" id="password_confirmation"
                                               value="{{old('password_confirmation')}}">
                                        @error('password')
                                        <span class="text-danger d-block mt-1">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a onclick="event.preventDefault();document.getElementById('new_password').submit()"
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
