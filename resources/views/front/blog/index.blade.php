@extends('front.layouts.master')

@section('page_title','Blogs')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">لیست وبلاگ</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">لیست وبلاگ</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ========================== Articles Section =============================== -->
    <section class="pt-0">
        <div class="container">

            <div class="row">

                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="blog-detail.html"><img src="/front/img/b-1.jpg" class="img-fluid" alt="" /></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>چطور زبان انگلیسی را سریع یاد بگیریم؟</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/front/img/user-1.jpg" class="img-fluid" alt="" /></div>
                                <h4>آدام ویلسون</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="blog-detail.html"><img src="/front/img/b-2.jpg" class="img-fluid" alt="" /></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>لزوم یادگیری زبان در دنیای امروزی!</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/front/img/user-2.jpg" class="img-fluid" alt="" /></div>
                                <h4>جان اسمیت</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="blog-detail.html"><img src="/front/img/b-3.jpg" class="img-fluid" alt="" /></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>چطور امتحان حضوری موفقی داشته باشیم؟</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/front/img/user-3.jpg" class="img-fluid" alt="" /></div>
                                <h4>دانیال ویکیونز</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="blog-detail.html"><img src="/front/img/b-3.jpg" class="img-fluid" alt="" /></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>کلید سوالات کنکور برای رشته های مختلف</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/front/img/user-3.jpg" class="img-fluid" alt="" /></div>
                                <h4>دانیال ویکیونز</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="blog-detail.html"><img src="/front/img/b-3.jpg" class="img-fluid" alt="" /></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>فعالیت های سرگرم کننده در کلاس آنلاین</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/front/img/user-3.jpg" class="img-fluid" alt="" /></div>
                                <h4>دانیال ویکیونز</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="blog-detail.html"><img src="/front/img/b-3.jpg" class="img-fluid" alt="" /></a>
                        </div>

                        <div class="articles_grid_caption">
                            <h4>روش تدریس و انواع شیوه های نوین یادگیری</h4>
                            <div class="articles_grid_author">
                                <div class="articles_grid_author_img"><img src="/front/img/user-3.jpg" class="img-fluid" alt="" /></div>
                                <h4>دانیال ویکیونز</h4>
                            </div>
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
                            <button type="button" class="btn btn-loader"><i class="ti-reload ml-3"></i>فهرست کامل</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Row -->

        </div>
    </section>
    <!-- ========================== Articles Section =============================== -->

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
