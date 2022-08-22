@extends('front.layouts.master')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">تماس با ما</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Agency List Start ================================== -->
    <section class="bg-light">

        <div class="container">

            <!-- row Start -->
            <div class="row">

                <div class="col-lg-8 col-md-7">
                    <div class="prc_wrap">

                        <div class="prc_wrap_header">
                            <h4 class="property_block_title">تکمیل فرم درخواست</h4>
                        </div>

                        <form action="{{ route('contact_us.store') }}" id="contactUS">
                            <div class="prc_wrap-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>نام کامل</label>
                                            <input type="text" class="form-control simple" name="name">
                                            <div class="invalid-feedback">
                                                نام حداقل سه حرف باشد.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>شماره تماس</label>
                                            <input type="email" class="form-control simple" name="cell">
                                            <div class="invalid-feedback">
                                                شماره تماس مطابق فرمت 09100968228 وارد شود.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>عنوان</label>
                                    <input type="text" class="form-control simple" name="title">
                                    <div class="invalid-feedback">
                                        نام حداقل سه حرف باشد.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>پیام</label>
                                    <textarea class="form-control simple" name="body"></textarea>
                                    <div class="invalid-feedback">
                                        پیام حداقل سه حرف باشد.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-theme" type="submit">ارسال درخواست</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

                <div class="col-lg-4 col-md-5">

                    <div class="prc_wrap">

                        <div class="prc_wrap_header">
                            <h4 class="property_block_title">راه های ارتباطی</h4>
                        </div>

                        <div class="prc_wrap-body">
                            <div class="contact-info">

                                <h2>در تماس باشید</h2>
                                <p class="text-justify">آستراکدر با <span class="theme-cl">پشتیبانی 24/7</span> و پاسخگویی کمتر از <span class="theme-cl">هفت ساعت</span> گامی مهم در راستای پاسخگویی هر چه سریعتر به نیازهای دانشجویان عزیز فراهم نموده است. </p>

                                <div class="cn-info-detail">
                                    <div class="cn-info-icon">
                                        <i class="ti-home"></i>
                                    </div>
                                    <div class="cn-info-content">
                                        <h4 class="cn-info-title">آدرس ما</h4>
                                        ایران، تهران <br>خیابان انقلاب
                                    </div>
                                </div>

                                <div class="cn-info-detail">
                                    <div class="cn-info-icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="cn-info-content">
                                        <h4 class="cn-info-title">پست الکترونیکی</h4>
                                        codewithastra@gmail.com
                                    </div>
                                </div>

                                <div class="cn-info-detail">
                                    <div class="cn-info-icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="cn-info-content">
                                        <h4 class="cn-info-title">شماره تماس</h4>
                                        <a href="tel:+989100968228" dir="ltr">+98 910 096 8228</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Agency List End ================================== -->
@endsection


@section('script')

@endsection
