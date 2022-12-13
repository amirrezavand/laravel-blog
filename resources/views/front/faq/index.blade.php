@extends('front.layouts.master')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">سوالات متداول</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">سوالات متداول</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- =================================== FAQS =================================== -->
    <section class="pt-0">
        <div class="container">

            <div class="row">

                <div class="col-lg-10 col-md-12 col-sm-12">

                    <div class="property_block_wrap_header">
                        <ul class="nav nav-tabs customize-tab tabs_creative" id="myTab" role="tablist">
                            <li class="nav-item mt-2">
                                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#item1" role="tab" aria-controls="general" aria-selected="true">روش عضویت در سایت</a>
                            </li>

                            <li class="nav-item mt-2">
                                <a class="nav-link" id="payment-tab" data-toggle="tab" href="#item2" role="tab" aria-controls="payment" aria-selected="false">نحوه برگزاری دوره ها و تفاوت بین آن ها</a>
                            </li>

                            <li class="nav-item mt-2">
                                <a class="nav-link" id="upgrade-tab" data-toggle="tab" href="#item3" role="tab" aria-controls="upgrade" aria-selected="false">نحوه شرکت و طی کردن مسیرهای یادگیری</a>
                            </li>

                            <li class="nav-item mt-2">
                                <a class="nav-link" id="upgrade-tab" data-toggle="tab" href="#item4" role="tab" aria-controls="upgrade" aria-selected="false">راهنمای ورود به کلاس آنلاین</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content tabs_content_creative" id="myTabContent">

                        <!-- general Query -->
                        <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="general-tab">

                            <div class="accordion" id="parent1">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                نحوه عضویت در سایت چگونه است؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#parent1">
                                        <div class="card-body">
                                            <p class="ac-para">
                                                برای عضویت در سایت کافیست شماره موبایل خود را وارد کرده، سپس از طریق پیامک کدی برای شما ارسال میشود و پس از وارد نمودن کد ارسالی و نام و نام خانوادگی و رمز عبور و تکرار رمز در سایت ثبت نام نمایید.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                برای مشاهده کدام قسمت ها باید عضو سایت شوم؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#parent1">
                                        <div class="card-body">
                                            <p class="ac-para">
                                                برای مشاهده، خرید و دانلود دوره ها باید عضو سایت شویم.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- general Query -->
                        <div class="tab-pane fade" id="item2" role="tabpanel" aria-labelledby="payment-tab">

                            <div class="accordion" id="paymentac">
                                <div class="card">
                                    <div class="card-header" id="headingOne1">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#paymentcollapse" aria-expanded="true" aria-controls="paymentcollapse">
                                                آیا می توانم درخواست بازپرداخت کنم؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="paymentcollapse" class="collapse show" aria-labelledby="headingOne1" data-parent="#paymentac">
                                        <div class="card-body">
                                            <p class="ac-para">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- general Query -->
                        <div class="tab-pane fade" id="item3" role="tabpanel" aria-labelledby="upgrade-tab">

                            <div class="accordion" id="upgradeac">
                                <div class="card">
                                    <div class="card-header" id="headingOne2">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#upgradecollapseOne" aria-expanded="true" aria-controls="upgradecollapseOne">
                                                چگونه تم Learnup را ارتقا دهیم؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="upgradecollapseOne" class="collapse show" aria-labelledby="headingOne2" data-parent="#upgradeac">
                                        <div class="card-body">
                                            <p class="ac-para">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- general Query -->
                        <div class="tab-pane fade" id="item4" role="tabpanel" aria-labelledby="upgrade-tab">

                            <div class="accordion" id="upgradeac">
                                <div class="card">
                                    <div class="card-header" id="headingOne2">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#upgradecollapseOne" aria-expanded="true" aria-controls="upgradecollapseOne">
                                                نحوه برگزاری دوره ها چگونه است؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="upgradecollapseOne" class="collapse show" aria-labelledby="headingOne2" data-parent="#upgradeac">
                                        <div class="card-body">
                                            <p class="ac-para">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ====================================== FAQS =================================== -->

    <!-- ============================ Featured Instructor Start ================================== -->
    {{--    <section class="bg-light">--}}
    {{--        <div class="container">--}}

    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-lg-5 col-md-6 col-sm-12">--}}
    {{--                    <div class="sec-heading center">--}}
    {{--                        <p>استاتید برتر</p>--}}
    {{--                        <h2>معلم های <span class="theme-cl">تدریس خصوصی</span> درس های مختلف</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12 col-md-12 col-sm-12">--}}

    {{--                    <div class="four_slide-dots articles arrow_middle" dir="rtl">--}}

    {{--                        <!-- Single Slide -->--}}
    {{--                        <div class="singles_items">--}}
    {{--                            <div class="instructor_wrap">--}}
    {{--                                <div class="instructor_thumb">--}}
    {{--                                    <a href="instructor-detail.html"><img src="/front/img/user-1.jpg" class="img-fluid" alt=""></a>--}}
    {{--                                </div>--}}
    {{--                                <div class="instructor_caption">--}}
    {{--                                    <h4><a href="instructor-detail.html">دانیل دیوانسکر</a></h4>--}}
    {{--                                    <span>طراح وب</span>--}}
    {{--                                    <ul>--}}
    {{--                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <!-- Single Slide -->--}}
    {{--                        <div class="singles_items">--}}
    {{--                            <div class="instructor_wrap">--}}
    {{--                                <div class="instructor_thumb">--}}
    {{--                                    <a href="instructor-detail.html"><img src="/front/img/user-2.jpg" class="img-fluid" alt=""></a>--}}
    {{--                                </div>--}}
    {{--                                <div class="instructor_caption">--}}
    {{--                                    <h4><a href="instructor-detail.html">شیلپا سینگ</a></h4>--}}
    {{--                                    <span>مدیر تیم</span>--}}
    {{--                                    <ul>--}}
    {{--                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <!-- Single Slide -->--}}
    {{--                        <div class="singles_items">--}}
    {{--                            <div class="instructor_wrap">--}}
    {{--                                <div class="instructor_thumb">--}}
    {{--                                    <a href="instructor-detail.html"><img src="/front/img/user-3.jpg" class="img-fluid" alt=""></a>--}}
    {{--                                </div>--}}
    {{--                                <div class="instructor_caption">--}}
    {{--                                    <h4><a href="instructor-detail.html">آدام ویستون</a></h4>--}}
    {{--                                    <span>مدیر فروش</span>--}}
    {{--                                    <ul>--}}
    {{--                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <!-- Single Slide -->--}}
    {{--                        <div class="singles_items">--}}
    {{--                            <div class="instructor_wrap">--}}
    {{--                                <div class="instructor_thumb">--}}
    {{--                                    <a href="instructor-detail.html"><img src="/front/img/user-4.jpg" class="img-fluid" alt=""></a>--}}
    {{--                                </div>--}}
    {{--                                <div class="instructor_caption">--}}
    {{--                                    <h4><a href="instructor-detail.html">راگینی سینگ</a></h4>--}}
    {{--                                    <span>مدیر عامل</span>--}}
    {{--                                    <ul>--}}
    {{--                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <!-- Single Slide -->--}}
    {{--                        <div class="singles_items">--}}
    {{--                            <div class="instructor_wrap">--}}
    {{--                                <div class="instructor_thumb">--}}
    {{--                                    <a href="instructor-detail.html"><img src="/front/img/user-5.jpg" class="img-fluid" alt=""></a>--}}
    {{--                                </div>--}}
    {{--                                <div class="instructor_caption">--}}
    {{--                                    <h4><a href="instructor-detail.html">دانیال ویلسون</a></h4>--}}
    {{--                                    <span>برنامه نویس</span>--}}
    {{--                                    <ul>--}}
    {{--                                        <li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>--}}
    {{--                                        <li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </section>--}}
    <!-- ============================ Featured Instructor End ================================== -->

    <!-- ============================ Testimonial Start ================================== -->
    {{--    <section style="background:url(/front/img/testimonial.png)">--}}
    {{--        <div class="container">--}}

    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-lg-5 col-md-6 col-sm-12">--}}
    {{--                    <div class="sec-heading center">--}}
    {{--                        <p>مردم چه می گویند؟</p>--}}
    {{--                        <h2><span class="theme-cl">امتیازات</span> دانشجویان موفق و برتر</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <div id="testimonials_style" class="slick-carousel-3 arrow_middle" dir="rtl">--}}
    {{--                        <div class="testimonial-detail">--}}
    {{--                            <div class="client-detail-box">--}}
    {{--                                <div class="pic">--}}
    {{--                                    <img src="/front/img/user-1.jpg" alt="">--}}
    {{--                                </div>--}}
    {{--                                <div class="client-detail">--}}
    {{--                                    <h3 class="testimonial-title">آدام آلوریام</h3>--}}
    {{--                                    <span class="post">برنامه نویس وب</span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <p class="description">--}}
    {{--                                " ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. "--}}
    {{--                            </p>--}}
    {{--                        </div>--}}

    {{--                        <div class="testimonial-detail">--}}
    {{--                            <div class="client-detail-box">--}}
    {{--                                <div class="pic">--}}
    {{--                                    <img src="/front/img/user-2.jpg" alt="">--}}
    {{--                                </div>--}}
    {{--                                <div class="client-detail">--}}
    {{--                                    <h3 class="testimonial-title">ایلا میلیا</h3>--}}
    {{--                                    <span class="post">مدیر پروژه</span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <p class="description">--}}
    {{--                                " در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد."--}}
    {{--                            </p>--}}
    {{--                        </div>--}}

    {{--                        <div class="testimonial-detail">--}}
    {{--                            <div class="client-detail-box">--}}
    {{--                                <div class="pic">--}}
    {{--                                    <img src="/front/img/user-3.jpg" alt="">--}}
    {{--                                </div>--}}
    {{--                                <div class="client-detail">--}}
    {{--                                    <h3 class="testimonial-title">سینا زارعی</h3>--}}
    {{--                                    <span class="post">طراح وب</span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <p class="description">--}}
    {{--                                " کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد."--}}
    {{--                            </p>--}}
    {{--                        </div>--}}

    {{--                        <div class="testimonial-detail">--}}
    {{--                            <div class="client-detail-box">--}}
    {{--                                <div class="pic">--}}
    {{--                                    <img src="/front/img/user-4.jpg" alt="">--}}
    {{--                                </div>--}}
    {{--                                <div class="client-detail">--}}
    {{--                                    <h3 class="testimonial-title">ویلیامسون</h3>--}}
    {{--                                    <span class="post">طراح وب</span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <p class="description">--}}
    {{--                                " چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. "--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </section>--}}
    <!-- ============================ Testimonial End ================================== -->

@endsection
