<!doctype html>
<html lang="en">

<!-- Mirrored from envytheme.com/tf-demo/crake/blog-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2019 22:49:59 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="/front/assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/front//assets/css/animate.css">
    <!-- IcoFont Min CSS -->
    <link rel="stylesheet" href="/front//assets/css/icofont.min.css">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="/front//assets/css/meanmenu.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="/front//assets/css/magnific-popup.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="/front/assets/css/owl.carousel.min.css">
    <!-- NiceSelect Min CSS -->
    <link rel="stylesheet" href="/front//assets/css/nice-select.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/front//assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/front//assets/css/responsive.css">

    <title>Crake - A Creative Multi-Concept Template</title>

    <link rel="icon" type="image/png" href="/front/assets/img/favicon.png">
</head>

<body>
<!-- Start Preloader Area -->
{{--<div class="preloader-area">--}}
{{--    <div class="lds-hourglass"></div>--}}
{{--</div>--}}
<!-- End Preloader Area -->

@include('front.layouts.header')

<!-- Start Sidebar Modal -->
<div class="sidebar-modal">
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icofont-close"></i></span></button>

                    <h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img src="/front/assets/img/logo.png" alt="logo"></a></h2>
                </div>

                <div class="modal-body">
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Additional Links</h3>

                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-modal-widget">
                        <h3 class="title">Contact Info</h3>

                        <ul class="contact-info">
                            <li>
                                <i class="icofont-google-map"></i>
                                Address
                                <span>1660 Travis Street Miramar, FL 33025, California</span>
                            </li>
                            <li>
                                <i class="icofont-email"></i>
                                Email
                                <span>admin@crake.com</span>
                            </li>
                            <li>
                                <i class="icofont-phone"></i>
                                Phone
                                <span>+123 456 7890</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-modal-widget">
                        <h3 class="title">Connect With Us</h3>

                        <ul class="social-list">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
</div>
<!-- End Sidebar Modal -->

<!-- Start Search Box -->
<div id="header-search" class="header-search">
    <button type="button" class="close">×</button>
    <form class="header-search-form">
        <input type="search" value="" placeholder="Type here........" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<!-- End Search Box -->

@if(hasPageArea(getRouteName()))
    <!-- Start Page Title Area -->
    <section class="page-title-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>@yield('page_title')</h2>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="/front/assets/img/shape1.png" alt="img"></div>
        <div class="shape2"><img src="/front/assets/img/shape2.png" alt="img"></div>
        <div class="shape3"><img src="/front/assets/img/shape3.png" alt="img"></div>
        <div class="shape6"><img src="/front/assets/img/shape6.png" alt="img"></div>
        <div class="shape8 rotateme"><img src="/front/assets/img/shape8.svg" alt="shape"></div>
        <div class="shape9"><img src="/front/assets/img/shape9.svg" alt="shape"></div>

        <!-- Bubble Animte -->
        <div class="bubble-animate">
            <div class="circle small square1"></div>
            <div class="circle small square2"></div>
            <div class="circle small square3"></div>
            <div class="circle small square4"></div>
            <div class="circle small square5"></div>
            <div class="circle medium square1"></div>
            <div class="circle medium square2"></div>
            <div class="circle medium square3"></div>
            <div class="circle medium square4"></div>
            <div class="circle medium square5"></div>
            <div class="circle large square1"></div>
            <div class="circle large square2"></div>
            <div class="circle large square3"></div>
            <div class="circle large square4"></div>
        </div>
    </section>
    <!-- End Page Title Area -->
@endif

@yield('content')

@include('front.layouts.footer')

<!-- Back Top top -->
<div class="back-to-top">Top</div>
<!-- End Back Top top -->

<!-- Jquery Min JS -->
<script src="/front/assets/js/jquery.min.js"></script>
<!-- Popper Min JS -->
<script src="/front/assets/js/popper.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="/front/assets/js/bootstrap.min.js"></script>
<!-- Meanmenu Min JS -->
<script src="/front/assets/js/jquery.meanmenu.min.js"></script>
<!-- WOW Min JS -->
<script src="/front/assets/js/wow.min.js"></script>
<!-- Tilt Min JS -->
<script src="/front/assets/js/tilt.jquery.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="/front/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="/front/assets/js/owl.carousel.min.js"></script>
<!-- Waypoints Min Js -->
<script src="/front/assets/js/waypoints.min.js"></script>
<!-- Jquery CounterUp Min JS -->
<script src="/front/assets/js/jquery.counterup.min.js"></script>
<!-- NiceSelect Min Js -->
<script src="/front/assets/js/jquery.nice-select.min.js"></script>
<!-- ajaxChimp Min JS -->
<script src="/front/assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator Min JS -->
<script src="/front/assets/js/form-validator.min.js"></script>
<!-- Contact Form Min JS -->
<script src="/front/assets/js/contact-form-script.js"></script>
<!-- Main JS -->
<script src="/front/assets/js/main.js"></script>


@yield('script')
</body>

<!-- Mirrored from envytheme.com/tf-demo/crake/blog-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2019 22:49:59 GMT -->
</html>
