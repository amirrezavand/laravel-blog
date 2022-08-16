<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<!-- Start Navigation -->
<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#"><img src="/front/img/logo.png" class="logo" alt="" /></a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">


                <ul class="nav-menu">
                    @foreach(getHeader() as $item)
                        @if($item['view']=='all' || (auth()->check()==true?$item['view']=='auth':$item['view']=='guest'))
                            <li class="active"><a href="#">{{$item['title']}}<span class="submenu-indicator"></span></a>
{{--                                <a href="{{$item['route_name']?route($item['route_name']):''}}" class="nav-link {{isNavItemActive($item['route_name'],array_column($item['child'], 'route_name'),'active')}}">{{$item['title']}}</a>--}}
                                @if($item['child'])
                                    <ul class="nav-dropdown nav-submenu">
                                        @foreach($item['child'] as $itemChild)
                                            @if($itemChild['view']=='all' || (auth()->check()==true?$itemChild['view']=='auth':$itemChild['view']=='guest'))
                                                <li><a href="index.html">{{$itemChild['title']}}</a></li>
{{--                                                <li><a href="{{$itemChild['route_name']?route($itemChild['route_name']):''}}" class="{{isNavItemActive($itemChild['route_name'],array_column($itemChild['child'], 'route_name'),'active')}}">{{$itemChild['title']}}</a></li>--}}
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ul>



{{--                <ul class="nav-menu">--}}

{{--                    <li class="active"><a href="#">خانه<span class="submenu-indicator"></span></a>--}}
{{--                        <ul class="nav-dropdown nav-submenu">--}}
{{--                            <li><a href="#">نسخه های جدید<span class="submenu-indicator"></span></a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="new-home-1.html">نسخه پیش فرض</a></li>--}}
{{--                                    <li><a href="new-home-2.html">نسخه استاندارد</a></li>--}}
{{--                                    <li><a href="new-home-3.html">نسخه کلاسیک</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="index.html">خانه 1</a></li>--}}
{{--                            <li><a href="home-2.html">خانه 2</a></li>--}}
{{--                            <li><a href="home-3.html">خانه 3</a></li>--}}
{{--                            <li><a href="home-4.html">خانه 4</a></li>--}}
{{--                            <li><a href="home-5.html">خانه 5</a></li>--}}
{{--                            <li><a href="home-6.html">خانه 6</a></li>--}}
{{--                            <li><a href="home-7.html">خانه 7</a></li>--}}
{{--                            <li><a href="home-8.html">خانه 8</a></li>--}}
{{--                            <li><a href="home-9.html">خانه 9</a></li>--}}
{{--                            <li><a href="home-10.html">خانه 10</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li><a href="#">دوره های آموزشی<span class="submenu-indicator"></span></a>--}}
{{--                        <ul class="nav-dropdown nav-submenu">--}}
{{--                            <li><a href="#">نمای با نوارکناری<span class="submenu-indicator"></span></a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="grid-with-sidebar.html">نسخه 1</a></li>--}}
{{--                                    <li><a href="grid-with-sidebar-2.html">نسخه 2</a></li>--}}
{{--                                    <li><a href="grid-with-sidebar-3.html">نسخه 3</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="list-with-sidebar.html">طرح بندی لیستی</a></li>--}}
{{--                            <li><a href="#">نمای تمام صفحه<span class="submenu-indicator"></span></a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="full-width-course.html">نسخه 1</a></li>--}}
{{--                                    <li><a href="full-width-course-2.html">نسخه 2</a></li>--}}
{{--                                    <li><a href="full-width-course-3.html">نسخه 3</a></li>--}}
{{--                                    <li><a href="full-width-course-4.html">نسخه 4</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="#">جزئیات دوره<span class="submenu-indicator"></span></a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="detail.html">نسخه 1</a></li>--}}
{{--                                    <li><a href="detail-2.html">نسخه 2</a></li>--}}
{{--                                    <li><a href="detail-3.html">نسخه 3</a></li>--}}
{{--                                    <li><a href="detail-4.html">نسخه 4</a></li>--}}
{{--                                    <li><a href="detail-5.html">نسخه 5</a></li>--}}
{{--                                    <li><a href="detail-6.html">نسخه 6</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="find-instructor.html">لیست مدرس</a></li>--}}
{{--                            <li><a href="instructor-detail.html">جزئیات مدرس</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li><a href="#">صفحات<span class="submenu-indicator"></span></a>--}}
{{--                        <ul class="nav-dropdown nav-submenu">--}}
{{--                            <li class=""><a href="#">پنل کاربری<span class="submenu-indicator"></span></a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="dashboard.html">داشبورد</a></li>--}}
{{--                                    <li><a href="my-profile.html">حساب کاربری من</a></li>--}}
{{--                                    <li><a href="all-courses.html">دوره های من</a></li>--}}
{{--                                    <li><a href="my-order.html">سفارشات من</a></li>--}}
{{--                                    <li><a href="saved-courses.html">دوره های موردعلاقه</a></li>--}}
{{--                                    <li><a href="reviews.html">امتیازات من</a></li>--}}
{{--                                    <li><a href="settings.html">تنظیمات</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="#">فروشگاه<span class="submenu-indicator"></span></a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="shop-full-width.html">تمام صفحه</a></li>--}}
{{--                                    <li><a href="shop-left-sidebar.html">سایدبار چپ</a></li>--}}
{{--                                    <li><a href="shop-right-sidebar.html">سایدبار راست</a></li>--}}
{{--                                    <li><a href="product-detail.html">جزئیات</a></li>--}}
{{--                                    <li><a href="add-to-cart.html">افزودن به سبد خرید</a></li>--}}
{{--                                    <li><a href="product-wishlist.html">موردعلاقه ها</a></li>--}}
{{--                                    <li><a href="checkout.html">تسویه حساب</a></li>--}}
{{--                                    <li><a href="shop-order.html">ثبت سفارش</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="about-us.html">درباره ما</a></li>--}}
{{--                            <li><a href="blog.html">لیست بلاگ</a></li>--}}
{{--                            <li><a href="blog-detail.html">جزئیات بلاگ</a></li>--}}
{{--                            <li><a href="pricing.html">پکیج قیمت</a></li>--}}
{{--                            <li><a href="404.html">صفحه 404</a></li>--}}
{{--                            <li><a href="register.html">ثبت نام</a></li>--}}
{{--                            <li><a href="component.html">المان ها</a></li>--}}
{{--                            <li><a href="privacy.html">قوانین و شرایط</a></li>--}}
{{--                            <li><a href="faq.html">سوالات متداول</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li><a href="contact.html">تماس با ما</a></li>--}}

{{--                </ul>--}}

                <ul class="nav-menu nav-menu-social align-to-left">

                    <li class="login_click light">
                        <a href="#" data-toggle="modal" data-target="#login">ورود</a>
                    </li>
                    <li class="login_click">
                        <a href="#" data-toggle="modal" data-target="#signup">ثبت نام</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->




{{--<!-- Start Navbar Area -->--}}
{{--<header id="header">--}}
{{--    <div class="crake-mobile-nav">--}}
{{--        <div class="logo">--}}
{{--            <img src="/front/assets/img/logo.png" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="crake-nav">--}}
{{--        <div class="container">--}}
{{--            <nav class="navbar navbar-expand-md navbar-light">--}}
{{--                <a class="navbar-brand" href="index.html"><img src="/front/assets/img/logo.png" alt="logo"></a>--}}

{{--                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">--}}
{{--                    <ul class="navbar-nav nav">--}}
{{--                        @foreach(getHeader() as $item)--}}
{{--                            @if($item['view']=='all' || (auth()->check()==true?$item['view']=='auth':$item['view']=='guest'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{$item['route_name']?route($item['route_name']):''}}" class="nav-link {{isNavItemActive($item['route_name'],array_column($item['child'], 'route_name'),'active')}}">{{$item['title']}}</a>--}}
{{--                                    @if($item['child'])--}}
{{--                                        <ul class="dropdown_menu">--}}
{{--                                            @foreach($item['child'] as $itemChild)--}}
{{--                                                @if($itemChild['view']=='all' || (auth()->check()==true?$itemChild['view']=='auth':$itemChild['view']=='guest'))--}}
{{--                                                    <li><a href="{{$itemChild['route_name']?route($itemChild['route_name']):''}}" class="{{isNavItemActive($itemChild['route_name'],array_column($itemChild['child'], 'route_name'),'active')}}">{{$itemChild['title']}}</a></li>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    @endif--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="mr-auto others-option">--}}
{{--                    <ul class="navbar-nav">--}}
{{--                        <li class="header-search-box">--}}
{{--                            <a href="#header-search" title="Search">--}}
{{--                                <i class="icofont-search-2"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li data-toggle="modal" data-target="#myModal2">--}}
{{--                            <div class="side-menu">--}}
{{--                                <span class="bar-1"></span>--}}
{{--                                <span class="bar-2"></span>--}}
{{--                                <span class="bar-3"></span>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
{{--<!-- End Navbar Area -->--}}
