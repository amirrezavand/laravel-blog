<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>@yield('page_title')</title>

    <!-- Custom CSS -->
    <link href="/front/css/styles.css" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="/front/css/colors.css" rel="stylesheet">

</head>

<body class="red-skin rtl">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader"><div class="preloader"><span></span><span></span></div></div>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    @include('front.layouts.header')

    @yield('content')

    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer">
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <img src="/front/img/logo-light.png" class="img-footer" alt="" />
                            <div class="footer-add">
                                <p>تهران، خیابان سعادت آباد، خیابان کاج</p>
                                <p>+1 246-345-0695</p>
                                <p>info@learnup.com</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <h4 class="widget-title">لینک مفید</h4>
                            <ul class="footer-menu">
                                <li><a href="about-us.html">درباره ما</a></li>
                                <li><a href="faq.html">سوالات متداول</a></li>
                                <li><a href="checkout.html">تسویه حساب</a></li>
                                <li><a href="contact.html">تماس با ما</a></li>
                                <li><a href="blog.html">وبلاگ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <h4 class="widget-title">دسته بندی</h4>
                            <ul class="footer-menu">
                                <li><a href="#">طراحی وب</a></li>
                                <li><a href="#">شبکه و امنیت</a></li>
                                <li><a href="#">برنامه نویسی وب</a></li>
                                <li><a href="#">پایگاه داده</a></li>
                                <li><a href="#">برنامه نویسی موبایل</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <h4 class="widget-title">راهنما و پشتیبانی</h4>
                            <ul class="footer-menu">
                                <li><a href="#">اسناد</a></li>
                                <li><a href="#">چت آنلاین</a></li>
                                <li><a href="#">ارسال ایمیل</a></li>
                                <li><a href="#">قوانین و شرایط</a></li>
                                <li><a href="#">سوالات متداول</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">دانلود اپلیکیشن</h4>
                            <a href="#" class="other-store-link">
                                <div class="other-store-app">
                                    <div class="os-app-icon">
                                        <i class="lni-playstore theme-cl"></i>
                                    </div>
                                    <div class="os-app-caps">
                                        گوگل پلی
                                        <span>دریافت اپلیکیشن</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="other-store-link">
                                <div class="other-store-app">
                                    <div class="os-app-icon">
                                        <i class="lni-apple theme-cl"></i>
                                    </div>
                                    <div class="os-app-caps">
                                        اپ استور
                                        <span>دریافت اپلیکیشن</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6">
                        <p class="mb-0">© 2022 LearnUp ارائه شده توسط <a href="#">راست چین</a></p>
                    </div>

                    <div class="col-lg-6 col-md-6 text-left">
                        <ul class="footer-bottom-social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">ورود به حساب</h4>
                    <div class="login-form">
                        <form>

                            <div class="form-group">
                                <label>نام کاربری</label>
                                <input type="text" class="form-control" placeholder="نام کاربری">
                            </div>

                            <div class="form-group">
                                <label>رمز عبور</label>
                                <input type="password" class="form-control" placeholder="*******">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">ورود به حساب</button>
                            </div>

                        </form>
                    </div>

                    <div class="social-login mb-3">
                        <ul>
                            <li>
                                <input id="reg" class="checkbox-custom" name="reg" type="checkbox">
                                <label for="reg" class="checkbox-custom-label">ذخیره رمزعبور</label>
                            </li>
                            <li class="left"><a href="#" class="theme-cl">رمز عبور خود را فراموش کرده اید؟</a></li>
                        </ul>
                    </div>

                    <div class="modal-divider"><span>یـا</span></div>
                    <div class="social-login ntr mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google</a></li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <p class="mt-2">حساب کاربری دارید؟ <a href="register.html" class="link">ورود به اکانت</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">ثبت نام</h4>
                    <div class="login-form">
                        <form>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="نام کامل">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="پست الکترونیکی">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="نام کاربری">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="*******">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">ثبت نام</button>
                            </div>

                        </form>
                    </div>

                    <div class="modal-divider"><span>یـا</span></div>
                    <div class="social-login ntr mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google</a></li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <p class="mt-3"><i class="ti-user ml-1"></i>آیا حساب کاربری دارید؟ <a href="#" class="link">ورود به حساب کاربری</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/front/js/jquery.min.js"></script>
<script src="/front/js/popper.min.js"></script>
<script src="/front/js/bootstrap.min.js"></script>
<script src="/front/js/select2.min.js"></script>
<script src="/front/js/slick.js"></script>
<script src="/front/js/jquery.counterup.min.js"></script>
<script src="/front/js/counterup.min.js"></script>
<script src="/front/js/custom.js"></script>

@yield('script')
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>
</html>





















{{--<!doctype html>--}}
{{--<html lang="en">--}}

{{--<!-- Mirrored from envytheme.com/tf-demo/crake/blog-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2019 22:49:59 GMT -->--}}
{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <!-- Bootstrap Min CSS -->--}}
{{--    <link rel="stylesheet" href="/front/assets/css/bootstrap.min.css">--}}
{{--    <!-- Animate CSS -->--}}
{{--    <link rel="stylesheet" href="/front//assets/css/animate.css">--}}
{{--    <!-- IcoFont Min CSS -->--}}
{{--    <link rel="stylesheet" href="/front//assets/css/icofont.min.css">--}}
{{--    <!-- Meanmenu Min CSS -->--}}
{{--    <link rel="stylesheet" href="/front//assets/css/meanmenu.css">--}}
{{--    <!-- Magnific Popup Min CSS -->--}}
{{--    <link rel="stylesheet" href="/front//assets/css/magnific-popup.min.css">--}}
{{--    <!-- Owl Carousel Min CSS -->--}}
{{--    <link rel="stylesheet" href="/front/assets/css/owl.carousel.min.css">--}}
{{--    <!-- NiceSelect Min CSS -->--}}
{{--    <link rel="stylesheet" href="/front//assets/css/nice-select.css">--}}
{{--    <!-- Style CSS -->--}}
{{--    <link rel="stylesheet" href="/front//assets/css/style.css">--}}
{{--    <!-- Responsive CSS -->--}}
{{--    <link rel="stylesheet" href="/front//assets/css/responsive.css">--}}

{{--    <title>Crake - A Creative Multi-Concept Template</title>--}}

{{--    <link rel="icon" type="image/png" href="/front//front/img/favicon.png">--}}
{{--</head>--}}

{{--<body>--}}
{{--<!-- Start Preloader Area -->--}}
{{--<div class="preloader-area">--}}
{{--    <div class="lds-hourglass"></div>--}}
{{--</div>--}}
{{--<!-- End Preloader Area -->--}}

{{--@include('front.layouts.header')--}}

{{--<!-- Start Sidebar Modal -->--}}
{{--<div class="sidebar-modal">--}}
{{--    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icofont-close"></i></span></button>--}}

{{--                    <h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img src="/front//front/img/logo.png" alt="logo"></a></h2>--}}
{{--                </div>--}}

{{--                <div class="modal-body">--}}
{{--                    <div class="sidebar-modal-widget">--}}
{{--                        <h3 class="title">Additional Links</h3>--}}

{{--                        <ul>--}}
{{--                            <li><a href="#">Login</a></li>--}}
{{--                            <li><a href="#">Register</a></li>--}}
{{--                            <li><a href="#">FAQ</a></li>--}}
{{--                            <li><a href="#">Logout</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                    <div class="sidebar-modal-widget">--}}
{{--                        <h3 class="title">Contact Info</h3>--}}

{{--                        <ul class="contact-info">--}}
{{--                            <li>--}}
{{--                                <i class="icofont-google-map"></i>--}}
{{--                                Address--}}
{{--                                <span>1660 Travis Street Miramar, FL 33025, California</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="icofont-email"></i>--}}
{{--                                Email--}}
{{--                                <span>admin@crake.com</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="icofont-phone"></i>--}}
{{--                                Phone--}}
{{--                                <span>+123 456 7890</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                    <div class="sidebar-modal-widget">--}}
{{--                        <h3 class="title">Connect With Us</h3>--}}

{{--                        <ul class="social-list">--}}
{{--                            <li><a href="#"><i class="icofont-facebook"></i></a></li>--}}
{{--                            <li><a href="#"><i class="icofont-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="icofont-instagram"></i></a></li>--}}
{{--                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- modal-content -->--}}
{{--        </div><!-- modal-dialog -->--}}
{{--    </div><!-- modal -->--}}
{{--</div>--}}
{{--<!-- End Sidebar Modal -->--}}

{{--<!-- Start Search Box -->--}}
{{--<div id="header-search" class="header-search">--}}
{{--    <button type="button" class="close">×</button>--}}
{{--    <form class="header-search-form">--}}
{{--        <input type="search" value="" placeholder="Type here........" />--}}
{{--        <button type="submit" class="btn btn-primary">Search</button>--}}
{{--    </form>--}}
{{--</div>--}}
{{--<!-- End Search Box -->--}}

{{--@if(hasPageArea(getRouteName()))--}}
{{--    <!-- Start Page Title Area -->--}}
{{--    <section class="page-title-banner">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h2>@yield('page_title')</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="shape1"><img src="/front//front/img/shape1.png" alt="img"></div>--}}
{{--        <div class="shape2"><img src="/front//front/img/shape2.png" alt="img"></div>--}}
{{--        <div class="shape3"><img src="/front//front/img/shape3.png" alt="img"></div>--}}
{{--        <div class="shape6"><img src="/front//front/img/shape6.png" alt="img"></div>--}}
{{--        <div class="shape8 rotateme"><img src="/front//front/img/shape8.svg" alt="shape"></div>--}}
{{--        <div class="shape9"><img src="/front//front/img/shape9.svg" alt="shape"></div>--}}

{{--        <!-- Bubble Animte -->--}}
{{--        <div class="bubble-animate">--}}
{{--            <div class="circle small square1"></div>--}}
{{--            <div class="circle small square2"></div>--}}
{{--            <div class="circle small square3"></div>--}}
{{--            <div class="circle small square4"></div>--}}
{{--            <div class="circle small square5"></div>--}}
{{--            <div class="circle medium square1"></div>--}}
{{--            <div class="circle medium square2"></div>--}}
{{--            <div class="circle medium square3"></div>--}}
{{--            <div class="circle medium square4"></div>--}}
{{--            <div class="circle medium square5"></div>--}}
{{--            <div class="circle large square1"></div>--}}
{{--            <div class="circle large square2"></div>--}}
{{--            <div class="circle large square3"></div>--}}
{{--            <div class="circle large square4"></div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Page Title Area -->--}}
{{--@endif--}}

{{--@yield('content')--}}

{{--@include('front.layouts.footer')--}}

{{--<!-- Back Top top -->--}}
{{--<div class="back-to-top">Top</div>--}}
{{--<!-- End Back Top top -->--}}

{{--<!-- Jquery Min JS -->--}}
{{--<script src="/front/assets/js/jquery.min.js"></script>--}}
{{--<!-- Popper Min JS -->--}}
{{--<script src="/front/assets/js/popper.min.js"></script>--}}
{{--<!-- Bootstrap Min JS -->--}}
{{--<script src="/front/assets/js/bootstrap.min.js"></script>--}}
{{--<!-- Meanmenu Min JS -->--}}
{{--<script src="/front/assets/js/jquery.meanmenu.min.js"></script>--}}
{{--<!-- WOW Min JS -->--}}
{{--<script src="/front/assets/js/wow.min.js"></script>--}}
{{--<!-- Tilt Min JS -->--}}
{{--<script src="/front/assets/js/tilt.jquery.min.js"></script>--}}
{{--<!-- Magnific Popup Min JS -->--}}
{{--<script src="/front/assets/js/jquery.magnific-popup.min.js"></script>--}}
{{--<!-- Owl Carousel Min JS -->--}}
{{--<script src="/front/assets/js/owl.carousel.min.js"></script>--}}
{{--<!-- Waypoints Min Js -->--}}
{{--<script src="/front/assets/js/waypoints.min.js"></script>--}}
{{--<!-- Jquery CounterUp Min JS -->--}}
{{--<script src="/front/assets/js/jquery.counterup.min.js"></script>--}}
{{--<!-- NiceSelect Min Js -->--}}
{{--<script src="/front/assets/js/jquery.nice-select.min.js"></script>--}}
{{--<!-- ajaxChimp Min JS -->--}}
{{--<script src="/front/assets/js/jquery.ajaxchimp.min.js"></script>--}}
{{--<!-- Form Validator Min JS -->--}}
{{--<script src="/front/assets/js/form-validator.min.js"></script>--}}
{{--<!-- Contact Form Min JS -->--}}
{{--<script src="/front/assets/js/contact-form-script.js"></script>--}}
{{--<!-- Main JS -->--}}
{{--<script src="/front/assets/js/main.js"></script>--}}


{{--@yield('script')--}}
{{--</body>--}}

{{--<!-- Mirrored from envytheme.com/tf-demo/crake/blog-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2019 22:49:59 GMT -->--}}
{{--</html>--}}
