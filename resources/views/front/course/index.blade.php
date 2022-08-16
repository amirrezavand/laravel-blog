@extends('front.layouts.master')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">نمای تمام صفحه</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">نسخه 3</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->


    <!-- ============================ Full Width Courses  ================================== -->
    <section class="pt-0">
        <div class="container">

            <!-- Onclick Sidebar -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div id="filter-sidebar" class="filter-sidebar">
                        <div class="filt-head">
                            <h4 class="filt-first">جستجوی پیشرفته</h4>
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">بستن <i class="ti-close"></i></a>
                        </div>
                        <div class="show-hide-sidebar">

                            <!-- Find New Property -->
                            <div class="sidebar-widgets">

                                <!-- Search Form -->
                                <form class="form-inline addons mb-3">
                                    <input class="form-control" type="search" placeholder="جستجو دوره" aria-label="Search">
                                    <button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
                                </form>

                                <h4 class="side_title">دسته بندی دوره</h4>
                                <ul class="no-ul-list mb-3">
                                    <li>
                                        <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                        <label for="a-4" class="checkbox-custom-label">برنامه نویسی (3)</label>
                                    </li>
                                    <li>
                                        <input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
                                        <label for="a-5" class="checkbox-custom-label">طراحی سایت (2)</label>
                                    </li>
                                    <li>
                                        <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                        <label for="a-6" class="checkbox-custom-label">عمومی (2)</label>
                                    </li>
                                    <li>
                                        <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                        <label for="a-7" class="checkbox-custom-label">فناوری اطلاعات (2)</label>
                                    </li>
                                    <li>
                                        <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                        <label for="a-8" class="checkbox-custom-label">گرافیک (2)</label>
                                    </li>
                                    <li>
                                        <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                        <label for="a-9" class="checkbox-custom-label">شبکه و امنیت (2)</label>
                                    </li>
                                </ul>

                                <h4 class="side_title">مدرسین</h4>
                                <ul class="no-ul-list mb-3">
                                    <li>
                                        <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                        <label for="a-1" class="checkbox-custom-label">حسام موسوی (4)</label>
                                    </li>
                                    <li>
                                        <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                        <label for="a-2" class="checkbox-custom-label">مهرداد عظیمی (11)</label>
                                    </li>
                                    <li>
                                        <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                        <label for="a-6" class="checkbox-custom-label">الهام کریمی (4)</label>
                                    </li>
                                    <li>
                                        <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                        <label for="a-7" class="checkbox-custom-label">مسعود راد (7)</label>
                                    </li>
                                    <li>
                                        <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                        <label for="a-8" class="checkbox-custom-label">مهدی کشاورز</label>
                                    </li>
                                    <li>
                                        <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                        <label for="a-9" class="checkbox-custom-label">شادی عبدی</label>
                                    </li>
                                </ul>

                                <h4 class="side_title">نوع دوره</h4>
                                <ul class="no-ul-list mb-3">
                                    <li>
                                        <input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
                                        <label for="a-10" class="checkbox-custom-label">همه (75)</label>
                                    </li>
                                    <li>
                                        <input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
                                        <label for="a-11" class="checkbox-custom-label">رایگان (15)</label>
                                    </li>
                                    <li>
                                        <input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
                                        <label for="a-12" class="checkbox-custom-label">نقدی (60)</label>
                                    </li>
                                </ul>

                                <button class="btn btn-theme full-width mb-2">فیلتر کن</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">

                    <!-- Row -->
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <strong>142</strong> دوره آموزشی یافت شد.
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ordering">
                            <div class="filter_wraps">
                                <div class="dl">
                                    <div id="main2">
                                        <a href="javascript:void(0)" class="btn btn-theme arrow-btn filter_open" onclick="openNav()" id="open2"><span><i class="fas fa-arrow-alt-circle-right"></i></span>باکس فیلتر</a>
                                    </div>
                                </div>
                                <div class="dropdown show">
                                    <a class="btn btn-custom dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        دوره های آموزشی
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">پرمخاطب</a>
                                        <a class="dropdown-item" href="#">جدید</a>
                                        <a class="dropdown-item" href="#">ویژه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->

                    <div class="row">

                        <!-- Cource Grid 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="education_block_grid style_2">

                                <div class="education_block_thumb">
                                    <a href="course-detail.html"><img src="/front/img/course-1.jpg" class="img-fluid" alt=""></a>
                                    <div class="education_ratting"><i class="fa fa-star"></i>4.7 (40)</div>
                                </div>

                                <div class="education_block_body">
                                    <h4 class="bl-title"><a href="course-detail.html">آموزش بیوانفورماتیک و پیاده سازی در پایتون</a></h4>
                                </div>

                                <div class="cources_info_style3">
                                    <ul>
                                        <li><i class="ti-eye ml-2"></i>10682 بازدید</li>
                                        <li><i class="ti-control-skip-forward ml-2"></i>82 دوره</li>
                                        <li><i class="ti-time ml-2"></i>9ساعت 45دقیقه</li>
                                    </ul>
                                </div>

                                <div class="education_block_footer">
                                    <div class="education_block_author">
                                        <div class="path-img"><a href="instructor-detail.html"><img src="/front/img/user-2.jpg" class="img-fluid" alt=""></a></div>
                                        <h5><a href="instructor-detail.html">الهام کریمی</a></h5>
                                    </div>
                                    <div class="cources_price_foot"><span class="price_off">980ت</span>720</div>
                                </div>

                            </div>
                        </div>

                        <!-- Cource Grid 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="education_block_grid style_2">

                                <div class="education_block_thumb">
                                    <a href="course-detail.html"><img src="/front/img/course-2.jpg" class="img-fluid" alt=""></a>
                                    <div class="education_ratting"><i class="fa fa-star"></i>4.9 (29)</div>
                                </div>

                                <div class="education_block_body">
                                    <h4 class="bl-title"><a href="course-detail.html">پروژه محور : بازی مسابقه ماشین با UDK</a></h4>
                                </div>

                                <div class="cources_info_style3">
                                    <ul>
                                        <li><i class="ti-eye ml-2"></i>9882 بازدید</li>
                                        <li><i class="ti-control-skip-forward ml-2"></i>47 دوره</li>
                                        <li><i class="ti-time ml-2"></i>6ساعت 30دقیقه</li>
                                    </ul>
                                </div>

                                <div class="education_block_footer">
                                    <div class="education_block_author">
                                        <div class="path-img"><a href="instructor-detail.html"><img src="/front/img/user-3.jpg" class="img-fluid" alt=""></a></div>
                                        <h5><a href="instructor-detail.html">وحید فرخ نژاد</a></h5>
                                    </div>
                                    <div class="cources_price_foot"><span class="price_off">235ت</span>189</div>
                                </div>

                            </div>
                        </div>

                        <!-- Cource Grid 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="education_block_grid style_2">

                                <div class="education_block_thumb">
                                    <a href="course-detail.html"><img src="/front/img/course-3.jpg" class="img-fluid" alt=""></a>
                                    <div class="education_ratting"><i class="fa fa-star"></i>4.7 (60)</div>
                                </div>

                                <div class="education_block_body">
                                    <h4 class="bl-title"><a href="course-detail.html">آموزش پروژه محور فلاتر - طراحی رابط کاربری UI</a></h4>
                                </div>

                                <div class="cources_info_style3">
                                    <ul>
                                        <li><i class="ti-eye ml-2"></i>5882 بازدید</li>
                                        <li><i class="ti-control-skip-forward ml-2"></i>52 دوره</li>
                                        <li><i class="ti-time ml-2"></i>8ساعت 10دقیقه</li>
                                    </ul>
                                </div>

                                <div class="education_block_footer">
                                    <div class="education_block_author">
                                        <div class="path-img"><a href="instructor-detail.html"><img src="/front/img/user-4.jpg" class="img-fluid" alt=""></a></div>
                                        <h5><a href="instructor-detail.html">شیلپا شیخ</a></h5>
                                    </div>
                                    <div class="cources_price_foot"><span class="price_off">309ت</span>250</div>
                                </div>

                            </div>
                        </div>

                        <!-- Cource Grid 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="education_block_grid style_2">

                                <div class="education_block_thumb">
                                    <a href="course-detail.html"><img src="/front/img/course-4.jpg" class="img-fluid" alt=""></a>
                                    <div class="education_ratting"><i class="fa fa-star"></i>4.8 (45)</div>
                                </div>

                                <div class="education_block_body">
                                    <h4 class="bl-title"><a href="course-detail.html">پروژه محور : تابلو روان و کنترل با گوشی</a></h4>
                                </div>

                                <div class="cources_info_style3">
                                    <ul>
                                        <li><i class="ti-eye ml-2"></i>4732 بازدید</li>
                                        <li><i class="ti-control-skip-forward ml-2"></i>32 دوره</li>
                                        <li><i class="ti-time ml-2"></i>3ساعت 23دقیقه</li>
                                    </ul>
                                </div>

                                <div class="education_block_footer">
                                    <div class="education_block_author">
                                        <div class="path-img"><a href="instructor-detail.html"><img src="/front/img/user-5.jpg" class="img-fluid" alt=""></a></div>
                                        <h5><a href="instructor-detail.html">شاوریا پریت</a></h5>
                                    </div>
                                    <div class="cources_price_foot"><span class="price_off">135ت</span>89500</div>
                                </div>

                            </div>
                        </div>

                        <!-- Cource Grid 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="education_block_grid style_2">

                                <div class="education_block_thumb">
                                    <a href="course-detail.html"><img src="/front/img/course-5.jpg" class="img-fluid" alt=""></a>
                                    <div class="education_ratting"><i class="fa fa-star"></i>4.7 (40)</div>
                                </div>

                                <div class="education_block_body">
                                    <h4 class="bl-title"><a href="course-detail.html">آموزش تست نفوذ سایت های وردپرسی</a></h4>
                                </div>

                                <div class="cources_info_style3">
                                    <ul>
                                        <li><i class="ti-eye ml-2"></i>7582 بازدید</li>
                                        <li><i class="ti-control-skip-forward ml-2"></i>62 دوره</li>
                                        <li><i class="ti-time ml-2"></i>3ساعت 10دقیقه</li>
                                    </ul>
                                </div>

                                <div class="education_block_footer">
                                    <div class="education_block_author">
                                        <div class="path-img"><a href="instructor-detail.html"><img src="/front/img/user-6.jpg" class="img-fluid" alt=""></a></div>
                                        <h5><a href="instructor-detail.html">لیتا انشال</a></h5>
                                    </div>
                                    <div class="cources_price_foot"><span class="price_off">145ت</span>9900</div>
                                </div>

                            </div>
                        </div>

                        <!-- Cource Grid 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="education_block_grid style_2">

                                <div class="education_block_thumb">
                                    <a href="course-detail.html"><img src="/front/img/course-6.jpg" class="img-fluid" alt=""></a>
                                    <div class="education_ratting"><i class="fa fa-star"></i>4.8 (70)</div>
                                </div>

                                <div class="education_block_body">
                                    <h4 class="bl-title"><a href="course-detail.html">آموزش ساخت فروشگاه دیجی استایل با لاراول</a></h4>
                                </div>

                                <div class="cources_info_style3">
                                    <ul>
                                        <li><i class="ti-eye ml-2"></i>7482 بازدید</li>
                                        <li><i class="ti-control-skip-forward ml-2"></i>63 دوره</li>
                                        <li><i class="ti-time ml-2"></i>5ساعت 20دقیقه</li>
                                    </ul>
                                </div>

                                <div class="education_block_footer">
                                    <div class="education_block_author">
                                        <div class="path-img"><a href="instructor-detail.html"><img src="/front/img/user-1.jpg" class="img-fluid" alt=""></a></div>
                                        <h5><a href="instructor-detail.html">مهدی عظیمی</a></h5>
                                    </div>
                                    <div class="cources_price_foot"><span class="price_off">420ت</span>386</div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <!-- Pagination -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                    <button type="button" class="btn btn-loader"><i class="ti-reload ml-3"></i> فهرست کامل</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /Row -->

                </div>

            </div>
            <!-- Row -->

        </div>
    </section>
    <!-- ============================ Full Width Courses End ================================== -->

    <!-- ============================== Start Newsletter ================================== -->
    <section class="newsletter theme-bg inverse-theme">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="text-center">
                        <h2>به جامعه هزاران دانشجو بپیوندید!</h2>
                        <p>به جامعه میلیونی دانشجویان ما بپیوندید و به هزاران ساعت آموزش در حوزه‌های گوناگون دسترسی داشته باشید.</p>
                        <form class="sup-form">
                            <input type="email" class="form-control sigmup-me" placeholder="ایمیل خود را وارد کنید..." required="required">
                            <input type="submit" class="btn btn-theme" value="عضویت">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= End Newsletter =============================== -->
@endsection
