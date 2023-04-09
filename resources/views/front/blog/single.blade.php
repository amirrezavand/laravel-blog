@extends('front.layouts.master')

@section('content')
    <style>
        video {
            width: 100%;
            height: auto;
        }
    </style>
    <div class="blog-page">
        <!-- ============================ Page Title Start================================== -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="breadcrumbs-wrap">
                            <h1 class="breadcrumb-title">{{$blog->title}}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================ Page Title End ================================== -->

        <!-- ============================ Agency List Start ================================== -->
        <section class="gray">

            <div class="container">

                <!-- row Start -->
                <div class="row">

                    <!-- Blog Detail -->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="article_detail_wrapss single_article_wrap format-standard">
                            <div class="article_body_wrap">

                                <div class="article_featured_image">
                                    <img class="img-fluid w-100" src="{{$blog->img}}" alt="">
                                </div>

                                <div class="article_top_info">
                                    <ul class="article_middle_info">
                                        <li><a href="#"><span class="icons"><i class="ti-user"></i></span>توسط {{$blog->author_name}}</a></li>
{{--                                        <li><a href="#"><span class="icons"><i class="ti-comment-alt"></i></span>45 نظر ثبت شده</a></li>--}}
                                    </ul>
                                </div>
                                <h2 class="post-title">{{$blog->title}}</h2>

                                {!! $blog->body !!}



{{--                                <div class="article_bottom_info">--}}
{{--                                    <div class="post-tags">--}}
{{--                                        <h4 class="pbm-title">تگ های پربازدید</h4>--}}
{{--                                        <ul class="list">--}}
{{--                                            <li><a href="#">کنکور</a></li>--}}
{{--                                            <li><a href="#">موفقیت</a></li>--}}
{{--                                            <li><a href="#">تدریس</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="post-share">--}}
{{--                                        <h4 class="pbm-title">شبکه های اجتماعی</h4>--}}
{{--                                        <ul class="list">--}}
{{--                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="fab fa-vk"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="fab fa-tumblr"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single_article_pagination">--}}
{{--                                    <div class="prev-post">--}}
{{--                                        <a href="#" class="theme-bg">--}}
{{--                                            <div class="title-with-link">--}}
{{--                                                <span class="intro">پست قبلی</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="article_pagination_center_grid">--}}
{{--                                        <a href="#"><i class="ti-layout-grid3"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="next-post">--}}
{{--                                        <a href="#" class="theme-bg">--}}
{{--                                            <div class="title-with-link">--}}
{{--                                                <span class="intro">پست بعدی</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                            </div>
                        </div>

                        <!-- Author Detail -->
                        <div class="article_detail_wrapss single_article_wrap format-standard">

                            <div class="article_posts_thumb">
                                <span class="img"><img class="img-fluid" src="{{$blog->author_avatar}}" alt=""></span>
                                <h3 class="pa-name">{{$blog->author_name}}</h3>
{{--                                <ul class="social-links">--}}
{{--                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>--}}
{{--                                    <li><a href="https://ir.linkedin.com/in/amir-rezavand-0845341a2"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                                </ul>--}}
{{--                                <p class="pa-text">واقعیت در یک چیز خلاصه میشه و اون، چیزی جز کد نیست.</p>--}}
                            </div>

                        </div>

                        <!-- Blog Comment -->
                        <div class="article_detail_wrapss single_article_wrap format-standard">

                            <div class="comment-area">
{{--                                <div class="all-comments">--}}
{{--                                    <h3 class="comments-title">05 دیدگاه</h3>--}}
{{--                                    <div class="comment-list">--}}
{{--                                        <ul>--}}
{{--                                            <li class="article_comments_wrap">--}}
{{--                                                <article>--}}
{{--                                                    <div class="article_comments_thumb">--}}
{{--                                                        <img src="assets/img/user-1.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment-details">--}}
{{--                                                        <div class="comment-meta">--}}
{{--                                                            <div class="comment-left-meta">--}}
{{--                                                                <h4 class="author-name">مسعود راد <span class="selected"><i class="fas fa-bookmark"></i></span></h4>--}}
{{--                                                                <div class="comment-date">19شهریور 1399</div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-reply">--}}
{{--                                                                <a href="#" class="reply"><span class="icona"><i class="ti-back-right"></i></span> پاسخ</a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="comment-text">--}}
{{--                                                            <p>در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                                <ul class="children">--}}
{{--                                                    <li class="article_comments_wrap">--}}
{{--                                                        <article>--}}
{{--                                                            <div class="article_comments_thumb">--}}
{{--                                                                <img src="assets/img/user-2.jpg" alt="">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-details">--}}
{{--                                                                <div class="comment-meta">--}}
{{--                                                                    <div class="comment-left-meta">--}}
{{--                                                                        <h4 class="author-name">بنفشه عظیمی</h4>--}}
{{--                                                                        <div class="comment-date">20آذر 1399</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="comment-reply">--}}
{{--                                                                        <a href="#" class="reply"><span class="icons"><i class="ti-back-right"></i></span> پاسخ</a>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="comment-text">--}}
{{--                                                                    <p>با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </article>--}}
{{--                                                        <ul class="children">--}}
{{--                                                            <li class="article_comments_wrap">--}}
{{--                                                                <article>--}}
{{--                                                                    <div class="article_comments_thumb">--}}
{{--                                                                        <img src="assets/img/user-4.jpg" alt="">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="comment-details">--}}
{{--                                                                        <div class="comment-meta">--}}
{{--                                                                            <div class="comment-left-meta">--}}
{{--                                                                                <h4 class="author-name">نیلوفر احمدی</h4>--}}
{{--                                                                                <div class="comment-date">20دی 1399</div>--}}
{{--                                                                            </div>--}}
{{--                                                                            <div class="comment-reply">--}}
{{--                                                                                <a href="#" class="reply"><span class="icons"><i class="ti-back-right"></i></span> پاسخ</a>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="comment-text">--}}
{{--                                                                            <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </article>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="article_comments_wrap">--}}
{{--                                                <article>--}}
{{--                                                    <div class="article_comments_thumb">--}}
{{--                                                        <img src="assets/img/user-5.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment-details">--}}
{{--                                                        <div class="comment-meta">--}}
{{--                                                            <div class="comment-left-meta">--}}
{{--                                                                <h4 class="author-name">احسان محمدی</h4>--}}
{{--                                                                <div class="comment-date">24اسفند 1399</div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-reply">--}}
{{--                                                                <a href="#" class="reply"><span class="icons"><i class="ti-back-right"></i></span> پاسخ</a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="comment-text">--}}
{{--                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="comment-box submit-form">
                                    <h3 class="reply-title">ثبت دیدگاه</h3>
                                    <div class="comment-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="نام کامل">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="ایمیل معتبر">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <textarea name="comment" class="form-control" cols="30" rows="6" placeholder="نظر خود را بنویسید..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <a href="#" class="btn search-btn">ثبت</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <!-- Single blog Grid -->
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                        <!-- Searchbard -->
                        <div class="single_widgets widget_search">
                            <h4 class="title">جستجو</h4>
                            <form action="#" class="sidebar-search-form" autocomplete="off">
                                <input type="search" name="search" placeholder="عنوان وبلاگ...">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>

                        <!-- Categories -->
{{--                        <div class="single_widgets widget_category">--}}
{{--                            <h4 class="title">دسته بندی ها</h4>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">سبک زندگی <span>09</span></a></li>--}}
{{--                                <li><a href="#">تدریس خصوصی <span>12</span></a></li>--}}
{{--                                <li><a href="#">آموزش آنلاین <span>19</span></a>--}}
{{--                                </li><li><a href="#">برندسازی <span>17</span></a></li>--}}
{{--                                <li><a href="#">موزیک <span>10</span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        <!-- Trending Posts -->
{{--                        <div class="single_widgets widget_thumb_post">--}}
{{--                            <h4 class="title">پرمخاطب</h4>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--										<span class="left">--}}
{{--											<img src="assets/img/blog-sm-01.jpg" alt="" class="">--}}
{{--										</span>--}}
{{--                                    <span class="right">--}}
{{--											<a class="feed-title" href="#">در الکامپ امسال چه خبر است؟</a>--}}
{{--											<span class="post-date"><i class="ti-calendar"></i>10دقیقه پیش</span>--}}
{{--										</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--										<span class="left">--}}
{{--											<img src="assets/img/blog-sm-02.jpg" alt="" class="">--}}
{{--										</span>--}}
{{--                                    <span class="right">--}}
{{--											<a class="feed-title" href="#">چگونه بهانه آوردن را متوقف کنید؟</a>--}}
{{--											<span class="post-date"><i class="ti-calendar"></i>2ساعت پیش</span>--}}
{{--										</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--										<span class="left">--}}
{{--											<img src="assets/img/blog-sm-03.jpg" alt="" class="">--}}
{{--										</span>--}}
{{--                                    <span class="right">--}}
{{--											<a class="feed-title" href="#">مشخصات اولین تبلت فراسو</a>--}}
{{--											<span class="post-date"><i class="ti-calendar"></i>4ساعت پیش</span>--}}
{{--										</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--										<span class="left">--}}
{{--											<img src="assets/img/blog-sm-01.jpg" alt="" class="">--}}
{{--										</span>--}}
{{--                                    <span class="right">--}}
{{--											<a class="feed-title" href="#">مالزی به دنبال دانشجویان آمریکایی</a>--}}
{{--											<span class="post-date"><i class="ti-calendar"></i>7ساعت پیش</span>--}}
{{--										</span>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--										<span class="left">--}}
{{--											<img src="assets/img/blog-sm-02.jpg" alt="" class="">--}}
{{--										</span>--}}
{{--                                    <span class="right">--}}
{{--											<a class="feed-title" href="#">فیلترینگ 100 هزار واژه از سوی گوگل</a>--}}
{{--											<span class="post-date"><i class="ti-calendar"></i>3روز پیش</span>--}}
{{--										</span>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        <!-- Tags Cloud -->
{{--                        <div class="single_widgets widget_tags">--}}
{{--                            <h4 class="title">تگ</h4>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">سبک زندگی</a></li>--}}
{{--                                <li><a href="#">کنکور 1399</a></li>--}}
{{--                                <li><a href="#">تدریس</a></li>--}}
{{--                                <li><a href="#">برندسازی</a></li>--}}
{{--                                <li><a href="#">موزیک</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                    </div>

                </div>
                <!-- /row -->

            </div>

        </section>
        <!-- ============================ Agency List End ================================== -->
    </div>
@endsection
