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
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                نحوه عضویت در سایت چگونه است؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#parent1">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                برای عضویت در سایت کافیست شماره موبایل خود را وارد کرده، سپس از طریق پیامک کدی برای شما ارسال میشود و پس از وارد نمودن کد ارسالی و نام و نام خانوادگی و رمز عبور و تکرار رمز در سایت ثبت نام نمایید.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                برای مشاهده کدام قسمت ها باید عضو سایت شوم؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#parent1">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                برای مشاهده، خرید و دانلود دوره ها باید عضو سایت شویم.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- general Query -->
                        <div class="tab-pane fade" id="item2" role="tabpanel" aria-labelledby="upgrade-tab">

                            <div class="accordion" id="parent2">
                                <div class="card">
                                    <div class="card-header" id="headingOne2">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#upgradecollapseOne" aria-expanded="true" aria-controls="upgradecollapseOne">
                                                نحوه برگزاری دوره ها چگونه است؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="upgradecollapseOne" class="collapse show" aria-labelledby="headingOne2" data-parent="#parent2">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">دوره ها به سه طریق در کافه جی آی اس برگزار می شود.</p>
                                            <ul style="list-style-type: disc;padding-right: 20px">
                                                <li class="text-justify">دوره های غیر حضوری: دوره های غیر حضوری دوره هایی است که مطالب آموزشی به صورت بسته های آموزشی ارائه شده و در قالب فیلم های آموزشی یه صورت دانلودی در اختیار شما دانشجویان عزیز قرار می گیرد، دوره های غیرحضوری شامل پشتیبانی مدرسین CaffeGIS می باشند.</li>
                                                <li class="text-justify">دوره های آنلاین: دوره های آنلاین شبیه به دوره های حضوری بوده با این تفاوت که به صورت آنلاین در محیط Adobe Connect برگزار می گردد. جلسات کلاس ضبط گردیده و در پایان دوره در پروفایل دانشچو در دسترس قرار می گیرد. دوره های آنلاین نیز مشابه دوره های دیگر شامل پشتیبانی مدرسین CaffeGIS می باشد.</li>
                                                <li class="text-justify">دوره های حضوری: در دوره های حضوری دانشجویان در کلاس حضور فیزیکی داشته و آموزش ها به صورت چهره به چهره می باشد. این دوره ها به صورت کلاس های حضوری چند نفره در آموزشگاه ها و موسسات آموزش عالی و نیز سمینارهای آموزشی برای دانشگاه ها، شرکت ها و سازمان های مختلف دولتی و حصوصی برگزار می گردد. این دوره ها همراه با پشتیبانی آنلاین مدرسین بوده و در انتهای هر دوره فیلم آموزشی در اختیار دانشجوی گرامی قرار می گیرد.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo2">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseTwo2">
                                                سر فصل های دوره های حضوری، آنلاین و غیر حضوری چه تفاوتی دارد؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#parent2">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                سر فصل ها هیچ تفاوتی ندارند و همه دوره ها مبتنی بر مسیر یادگیری است. صرفا نحوه برگزاری دوره متفاوت است.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree2">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseThree2">
                                                نحوه ثبت نام در دوره های حضوری چگونه است؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#parent2">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                برنامه دوره های حضوری و آنلاین در تقویم آموزشی آورده شده است. کافیست روی دوره مورد نظر کلیک کرده و دکمه رزرو را کلیک کنید. می توانی زمان دوره را مشاهده کرده و با پرداخت یک چهارم مبلغ، در دوره پیش ثبت نام کنید.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour2">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseFour2">
                                                نحوه شرکت در دوره های آنلاین چگونه است؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseFour2" class="collapse" aria-labelledby="headingFour2" data-parent="#parent2">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                مشابه دوره های حضوری باید پیش ثبت نام انجام دهید.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- general Query -->
                        <div class="tab-pane fade" id="item3" role="tabpanel" aria-labelledby="upgrade-tab">

                            <div class="accordion" id="parent3">
                                <div class="card">
                                    <div class="card-header" id="headingOne3">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseOne3">
                                                مسیر یادگیری چیست و بر چه اساسی طراحی شده است؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#parent2">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                مسیر یادگیری در حقیقت نقشه راه شما برای متخصص شدن شماست. این مسیرها شامل تعداد زیادی جلسه آموزشی، تعداد زیادی ایستگاه تمرین و پرسش و ایستگاه تمرین و پرسش و ایستگاه های چالش است که با عبور موفقیت آمیز از هر مرحله به مرحله بعد خواهید رفت. ایستگاه های چالش همراه با اعتبار هدیه و ایستگاه های تمرین نمره شما را در پایان دوره مشخص می کند. همچنین روند پیشرفت دوره شما وابسته به مشاهده ویدئوها یا شرکت در کلاس ها مشخص می شود. مسیرهای یادگیری مبتنی بر مسیرهای یادگیری جهانی و منابع معتبر جهانی طراحی شده است. این مسیرها با مسیرهای شغلی نیز ترکیب شده و خروجی آن متخصص کردن شما برای حضور در فضای کسب و کار است.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo3">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseTwo3">
                                                چگونه باید مسیر یادگیری را طی نمایید؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3" data-parent="#parent3">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                فارغ از اینکه نحوه حضور شما در دوره چگونه باشد می توانید در مسیر قرار بگیرید. عبور از مسیر زمان دار است و شما باید طبق واحد زمانی در نظر گرفته شده مسیر را طی نمایید. اگر در طی زمان مسیر را طی نمایید مزایایی چون پشتیبانی، منتورینگ، اعتبار هدیه خواهید داشت و در صورتی که نتوانید مسیر را در زمان مقرر به پایان برسانید می توانید با پرداخت 20 درصد مبلغ ثبت نام مجددا مسیر را تمدید نمایید.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree3">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseThree3">
                                                با اعتبار هدیه چه کار می توانم انجام دهم؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#parent3">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                               می توانید با جمع شدن سکه هایتان اعتبار هدیه دریافت کرده و هر محصولی از سایت را دوست داشتید بخرید.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour3">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseFour3">
                                                شرکت در دوره ها تخفیف ندارد؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseFour3" class="collapse" aria-labelledby="headingFour3" data-parent="#parent3">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                دو نوع تخفیف داریم یک نوع تخفیف متناسب با هر دوره که برای هر دوره متناسب با زمان و قیمت دوره تخفیفاتی در نظر گرفته شده است که می توانید در صفحه مربوط به همان دوره مشاهده کنید. تخفیفات دیگر مربوط به ثبت نام پله ای در دوره های مسیر است که به ازای شرکت در هر دوره 5 درصد تخفیف میگیرید.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- general Query -->
                        <div class="tab-pane fade" id="item4" role="tabpanel" aria-labelledby="upgrade-tab">

                            <div class="accordion" id="parent4">
                                <div class="card">
                                    <div class="card-header" id="headingOne4">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseOne4">
                                                برای شرکت در دوره آنلاین چه تجهیزاتی مورد نیاز است؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne4" data-parent="#parent4">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                رایانه یا گوشی و اینترنت مناسب برای شرکت در کلاس کافیست.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo4">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapseTwo4">
                                                شرکت در دوره های آنلاین با چه نرم افزارهایی امکان پذیر است؟
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo4" data-parent="#parent4">
                                        <div class="card-body">
                                            <p class="ac-para text-justify">
                                                پلتفرم انتخاب ما ادوبی کانکت است.
                                            </p>
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
