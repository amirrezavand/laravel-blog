@extends('front.layouts.master')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">لیست دوره ها</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">لیست دوره ها</li>
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
                            <strong>{{$courses->count()}}</strong> دوره آموزشی یافت شد.
                        </div>
{{--                        <div class="col-lg-6 col-md-6 col-sm-12 ordering">--}}
{{--                            <div class="filter_wraps">--}}
{{--                                <div class="dl">--}}
{{--                                    <div id="main2">--}}
{{--                                        <a href="javascript:void(0)" class="btn btn-theme arrow-btn filter_open" onclick="openNav()" id="open2"><span><i class="fas fa-arrow-alt-circle-right"></i></span>باکس فیلتر</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="dropdown show">--}}
{{--                                    <a class="btn btn-custom dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        دوره های آموزشی--}}
{{--                                    </a>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
{{--                                        <a class="dropdown-item" href="#">پرمخاطب</a>--}}
{{--                                        <a class="dropdown-item" href="#">جدید</a>--}}
{{--                                        <a class="dropdown-item" href="#">ویژه</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <!-- /Row -->

                    <div class="row">

                        @foreach($courses as $course)
                            <!-- Cource Grid 1 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="education_block_grid style_2">

                                    <div class="education_block_thumb">
                                        <a href="course-detail.html"><img src="{{$course->img}}" class="img-fluid" alt=""></a>
{{--                                        <div class="education_ratting"><i class="fa fa-star"></i>4.7 (40)</div>--}}
                                    </div>

                                    <div class="education_block_body">
                                        <h4 class="bl-title"><a href="/courses/{{$course->id}}">{{$course->title}}</a></h4>
                                    </div>

                                    <div class="cources_info_style3">
                                        <ul>
                                            <li><i class="ti-eye ml-2"></i>{{\App\Models\Seen::where('object_type','course')->where('object_id',$course->id)->count()}} بازدید</li>
{{--                                            <li><i class="ti-control-skip-forward ml-2"></i>82 دوره</li>--}}
                                            @php($time=\App\Models\CourseContent::where('course_id',$course->id)->where('is_main','!=',1)->get()->sum('time'))
                                            <li><i class="ti-time ml-2"></i>@if(floor($time/60)!=0) {{floor($time/60)}}ساعت  @endif{{$time%60}}دقیقه</li>
                                        </ul>
                                    </div>

                                    <div class="education_block_footer">
                                        <div class="education_block_author">
                                            <div class="path-img"><a href="instructor-detail.html"><img src="{{$course->teacher_avatar}}" class="img-fluid" alt=""></a></div>
                                            <h5><a href="#">{{$course->teacher_name}}</a></h5>
                                        </div>
                                        <div class="cources_price_foot">@if($course->price=='0' || $course->price==null) رایگان @else {{$course->price}} ت @endif</div>
                                    </div>

                                </div>
                            </div>
                        @endforeach


                    </div>

                    <!-- Row -->
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 col-md-12 col-sm-12">--}}

{{--                            <!-- Pagination -->--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                                    <ul class="pagination p-center">--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                                <span class="ti-arrow-left"></span>--}}
{{--                                                <span class="sr-only">قبل</span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                        <li class="page-item active"><a class="page-link" href="#">3</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">...</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">18</a></li>--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="#" aria-label="Next">--}}
{{--                                                <span class="ti-arrow-right"></span>--}}
{{--                                                <span class="sr-only">بعد</span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- /Row -->

                </div>

            </div>
            <!-- Row -->

        </div>
    </section>
    <!-- ============================ Full Width Courses End ================================== -->

@endsection
