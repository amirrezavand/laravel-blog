@extends('front.layouts.master')

@section('content')
    <!-- ============================ Course Header Info Start================================== -->
    <div class="image-cover ed_detail_head lg theme-ov" style="background:#f4f4f4 url(/front/img/banner-4.jpg);" data-overlay="9">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-7">
                    <div class="ed_detail_wrap light">
{{--                        <ul class="cources_facts_list">--}}
{{--                            <li class="facts-1">وردپرس</li>--}}
{{--                            <li class="facts-5">طراحی سایت</li>--}}
{{--                        </ul>--}}
                        <div class="ed_header_caption">
                            <h2 class="ed_title">{{$course->title}}</h2>
                            <ul>
{{--                                <li><i class="ti-calendar"></i>10 - 20 هفته</li>--}}
                                <li><i class="ti-control-forward"></i>{{\App\Models\CourseContent::where('course_id',$course->id)->where('is_main','!=',1)->count()}} درس</li>
{{--                                <li><i class="ti-user"></i>502 شرکت کننده</li>--}}
                            </ul>
                        </div>
                        <div class="ed_header_short"><p>{{$course->short_description}}</p></div>

{{--                        <div class="ed_rate_info">--}}
{{--                            <div class="star_info">--}}
{{--                                <i class="fas fa-star filled"></i>--}}
{{--                                <i class="fas fa-star filled"></i>--}}
{{--                                <i class="fas fa-star filled"></i>--}}
{{--                                <i class="fas fa-star filled"></i>--}}
{{--                                <i class="fas fa-star"></i>--}}
{{--                            </div>--}}
{{--                            <div class="review_counter">--}}
{{--                                <strong class="high">4.7</strong> 3572 امتیاز--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Course Header Info End ================================== -->

    <!-- ============================ Course Detail ================================== -->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8">

                    <!-- Overview -->
                    <div class="edu_wraper border">
                        <p class="h4 mt-4 mb-2 theme-cl">توضیحات</p>
                        <div class="text-justify" style="line-height: 2;">
                            {{$course->body}}
                        </div>
                        @if($course->questions->count()>0)
                            <p class="h4 mt-4 mb-2 theme-cl">پرسش و پاسخ های متداول دوره</p>
                            <div class="tab-content tabs_content_creative" id="myTabContent">

                                <!-- course question -->
                                <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="accordion" id="parent1">
                                        @foreach($course->questions as $item)
                                            <div class="card my-2">
                                                <div class="card-header" id="heading{{$loop->index}}f">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link text-justify" type="button" data-toggle="collapse" data-target="#collapse{{$loop->index}}f" aria-expanded="true" aria-controls="collapse{{$loop->index}}f">
                                                            {!! $item->question!!}
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse{{$loop->index}}f" class="collapse @if($loop->index==0) show @endif" aria-labelledby="heading{{$loop->index}}f" data-parent="#parent1">
                                                    <div class="card-body">
                                                        <p class="ac-para text-justify">
                                                            {!! $item->answer !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    @if($course->online_price!=null)
                        <div class="edu_wraper border">
                            <p class="h4 mt-2 mb-2 theme-cl">شرکت در کلاس  غیرحضوری (آنلاین)</p>
                            <div class="text-justify" style="line-height: 2;">
                                <p>با توجه به درخواست دانشجویان عزیز به برگزاری کلاس حضوری توسط CEO کافه جی آی اس مهندس امیر حمیدی بر آن آمدیم که به خواسته آن عزیزان تا جایی که میتوانیم جامع عمل بپوشانیم.</p>
                                <p>لذا تصمیم به برگزاری کلاس ها به صورت کلاس  غیرحضوری (آنلاین) گرفتیم.</p>
                                <p>مدرس کلاس  غیرحضوری (آنلاین) امیرحمیدی بنیان گذار وبسایت CaffeGIS است. این دوره ها در پلتفرم ادوبی کانکت برگزار میشود.</p>
                                <p class="alert alert-info">مژده ویژه : کسانی که در کلاس  غیرحضوری (آنلاین) شرکت کنند به محتوای دانلودی این دوره دسترسی کامل دارند. </p>
                                <p class="alert alert-success">بعد از برگزاری کلاس گروه تلگرامی تشکیل می شود که در دانشجویان میتوانند به صورت مستمر با مدرس دوره در ارتباط باشند و مشکلات کار با نرم افزار مربوطه را با ایشان در میان بگذارند و مدرس راهنمایی های لازم در این زمینه را به دانشجو بدهد.</p>
                                <p>دوره ها به صورت مستمر و ماهانه تشکیل میشوند و در صورت ثبت نام در کمتر از یک ماه طول میکشد که دوره مربوطه تشکیل شود.</p>
                                <p>ساعات برگزاری کلاس به صورتی است که کارشناس مربوطه با شما تماس می گیرد و بر مبنای زمان های آزاد مدرس و شما عزیزان برنامه را میچیند.</p>
                                <p>مدت زمان کلاس متناسب با دوره متغیر هست و به صورت معمول دوبرابر زمان دوره دانلودی هست.</p>
                                <p>امکان قسط بندی هزینه کلاس برای شما عزیزان فراهم شده است، کافی است به شماره پشتیبانی صفحه تماس با ما، تماس حاصل فرمائید.</p>
                                <p>جهت شرکت در کلاس  غیرحضوری (آنلاین) بر روی دکمه زیر کلیک کنید.</p>
                                @auth()
                                    <div class="ed_view_link">
                                        @if(\App\Models\Factor::where('user_id',auth()->user()->id)->leftJoin('factor_objects','factors.id','factor_objects.factor_id')->where('is_paid',1)->where('object_id',$course->id)->where('lu_object_type','')->count()>0)
                                            <a href="#" class="btn btn-theme enroll-btn">ثبت نام شده</a>
                                        @else
                                            <a href="/cart/online/{{$course->id}}" class="btn btn-theme enroll-btn" id="@guest() buyCourse @endguest">شرکت در کلاس  غیرحضوری (آنلاین)({{$course->online_price}} تومان)</a>
                                        @endif
                                    </div>
                                @endauth
                                @guest()
                                    <div class="ed_view_link">
                                        <a href="#" class="btn btn-theme enroll-btn" id="buyCourse">شرکت در کلاس  غیرحضوری (آنلاین)({{$course->online_price}} تومان)</a>
                                    </div>
                                @endguest

                            </div>
                        </div>
                    @endif
                    <div class="edu_wraper border">
                        <h4 class="edu_title">سرفصل های دوره</h4>
                        <div id="accordionExample" class="accordion shadow circullum">
                            @php($sections=$course->contents->unique('section')->pluck('section'))

                            @foreach($sections as $section)
                                <!-- Part {{$sections}} -->
                                <div class="card">
                                    <div id="heading{{$section}}" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapse{{$section}}" aria-expanded="false" aria-controls="collapse{{$section}}" class="d-block position-relative collapsed text-dark collapsible-link py-2">بخش {{$section}}: {{$course->contents->where('section',$section)->where('is_main',1)->first()->title??' '}}</a></h6>
                                    </div>
                                    <div id="collapse{{$section}}" aria-labelledby="heading{{$section}}" data-parent="#accordionExample" class="collapse">
                                        <div class="card-body pl-3 pr-3">
                                            <ul class="lectures_lists">
                                                @foreach($course->contents->where('section',$section)->where('is_main','0') as $content )
                                                    <li @if($content->is_free==0) class="unview" @endif
                                                        @guest() data-action="firstLoginForDownloadCourse" @endguest
                                                        @auth()
                                                            @if($content->is_free==1) onclick="location.href='/courses/download/{{$content->id}}'" @endif
                                                            @if($content->is_free!=1)
                                                                @if(\App\Models\Factor::where('user_id',auth()->user()->id)->leftJoin('factor_objects','factors.id','factor_objects.factor_id')->where('is_paid',1)->where('object_id',$course->id)->where('lu_object_type','Course')->count()>0)
                                                                    onclick="location.href='/courses/download/{{$content->id}}'"
                                                                @else
                                                                    data-action="firstBuyForDownloadCourse"
                                                                @endif
                                                            @endif
                                                        @endauth
                                                        ><div class="lectures_lists_title"><i class="ti-control-play"></i>دوره: {{$content->sequence}}</div>{{$content->title}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- Reviews -->
{{--                    <div class="rating-overview border">--}}
{{--                        <div class="rating-overview-box">--}}
{{--                            <span class="rating-overview-box-total">4.2</span>--}}
{{--                            <span class="rating-overview-box-percent">از امتیاز 5</span>--}}
{{--                            <div class="star-rating" data-rating="5"><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="rating-bars">--}}
{{--                            <div class="rating-bars-item">--}}
{{--                                <span class="rating-bars-name">5 ستاره</span>--}}
{{--                                <span class="rating-bars-inner">--}}
{{--											<span class="rating-bars-rating high" data-rating="4.7">--}}
{{--												<span class="rating-bars-rating-inner" style="width: 85%;"></span>--}}
{{--											</span>--}}
{{--											<strong>85%</strong>--}}
{{--										</span>--}}
{{--                            </div>--}}
{{--                            <div class="rating-bars-item">--}}
{{--                                <span class="rating-bars-name">4 ستاره</span>--}}
{{--                                <span class="rating-bars-inner">--}}
{{--											<span class="rating-bars-rating good" data-rating="3.9">--}}
{{--												<span class="rating-bars-rating-inner" style="width: 75%;"></span>--}}
{{--											</span>--}}
{{--											<strong>75%</strong>--}}
{{--										</span>--}}
{{--                            </div>--}}
{{--                            <div class="rating-bars-item">--}}
{{--                                <span class="rating-bars-name">3 ستاره</span>--}}
{{--                                <span class="rating-bars-inner">--}}
{{--											<span class="rating-bars-rating mid" data-rating="3.2">--}}
{{--												<span class="rating-bars-rating-inner" style="width: 52.2%;"></span>--}}
{{--											</span>--}}
{{--											<strong>53%</strong>--}}
{{--										</span>--}}
{{--                            </div>--}}
{{--                            <div class="rating-bars-item">--}}
{{--                                <span class="rating-bars-name">1 ستاره</span>--}}
{{--                                <span class="rating-bars-inner">--}}
{{--											<span class="rating-bars-rating poor" data-rating="2.0">--}}
{{--												<span class="rating-bars-rating-inner" style="width:20%;"></span>--}}
{{--											</span>--}}
{{--											<strong>20%</strong>--}}
{{--										</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- instructor -->
                    <div class="single_instructor border">
                        <div class="single_instructor_thumb">
                            <a href="#"><img src="{{$course->user->avatar}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="single_instructor_caption">
                            <h4><a href="#">{{$course->user->name}}</a></h4>
                            <ul class="instructor_info">
{{--                                <li><i class="ti-video-camera"></i>5 ویدئو</li>--}}
                                <li class="mb-3"><i class="ti-control-forward"></i>{{\App\Models\Course::where('user_id',$course->user->id)->count()}} دوره</li>
                                @if($resume)
                                    <li>{!! $resume->description !!}</li>
                                @endif
{{--                                <li><i class="ti-user"></i> آپدیت تیر ماه</li>--}}
                            </ul>
                            <p>{{$course->user->about}}</p>
{{--                            <ul class="social_info">--}}
{{--                                <li><a href="#"><i class="ti-facebook"></i></a></li>--}}
{{--                                <li><a href="#"><i class="ti-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="ti-linkedin"></i></a></li>--}}
{{--                                <li><a href="#"><i class="ti-instagram"></i></a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class="list-single-main-item fl-wrap border">
                        <div class="list-single-main-item-title fl-wrap">
                            @if($comments->count()>0)
                                <h3>تاکنون <span> {{$comments->count()}} </span> دیدگاه ثبت شده است!</h3>
                            @else
                                <h3>تا کنون دیدگاهی ثبت نشده است. </h3>
                            @endif
                        </div>
                        <div class="reviews-comments-wrap">
                            <!-- reviews-comments-item -->
                            @foreach($comments as $item)
                                <div class="reviews-comments-item">
                                    <div class="review-comments-avatar">
                                        <img src="/front/img/avatar.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="reviews-comments-item-text">
                                        <h4><a href="#">{{$item->name}}</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>{{\Morilog\Jalali\Jalalian::forge($item->created_at)->format('%B %d، %Y')}}</span></h4>

                                        {{--                                    <div class="listing-rating high" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><span class="review-count">4.9</span> </div>--}}
                                        <div class="clearfix"></div>
                                        <p>{{$item->body}}</p>
                                        {{--                                    <div class="pull-left reviews-reaction">--}}
                                        {{--                                        <a href="#" class="comment-like active"><i class="ti-thumb-up"></i> 12</a>--}}
                                        {{--                                        <a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>--}}
                                        {{--                                        <a href="#" class="comment-love active"><i class="ti-heart"></i> 07</a>--}}
                                        {{--                                    </div>--}}
                                    </div>
                                </div>
                            @endforeach
                            <!--reviews-comments-item end-->

{{--                            <!-- reviews-comments-item -->--}}
{{--                            <div class="reviews-comments-item">--}}
{{--                                <div class="review-comments-avatar">--}}
{{--                                    <img src="/front/img/user-2.jpg" class="img-fluid" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="reviews-comments-item-text">--}}
{{--                                    <h4><a href="#">الهام پاکزاد</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>26 مرداد 1399</span></h4>--}}

{{--                                    <div class="listing-rating mid" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star"></i><span class="review-count">3.7</span> </div>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                    <p>"سلام.من PHP رو تو دوران هنرستان یاد گرفتم.اگه PHP رو به صورت مقدماتی کار کرده باشم ولی در حدی باشیم که درک نسبتا کاملی از کد خط ها و معنا و مفهوم آن داشته باشیم، کفایت میکنه یا باید پیشرفته تر آموزش ویدیویی ببینم؟ "</p>--}}
{{--                                    <div class="pull-left reviews-reaction">--}}
{{--                                        <a href="#" class="comment-like active"><i class="ti-thumb-up"></i> 12</a>--}}
{{--                                        <a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>--}}
{{--                                        <a href="#" class="comment-love active"><i class="ti-heart"></i> 07</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--reviews-comments-item end-->--}}

{{--                            <!-- reviews-comments-item -->--}}
{{--                            <div class="reviews-comments-item">--}}
{{--                                <div class="review-comments-avatar">--}}
{{--                                    <img src="/front/img/user-3.jpg" class="img-fluid" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="reviews-comments-item-text">--}}
{{--                                    <h4><a href="#">مهدی فدایی</a><span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i>20 بهمن 1398</span></h4>--}}

{{--                                    <div class="listing-rating good" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star"></i> <span class="review-count">4.2</span> </div>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                    <p>" سلام. برای یادگرفتن پیش نیاز این دوره که پی اچ پی هست تا کدام قسمت از اموزش پی اچ پی لازمه که یاد گرفته بشه؟(مطابق سرفصل های همین دوره در سایت) "</p>--}}
{{--                                    <div class="pull-left reviews-reaction">--}}
{{--                                        <a href="#" class="comment-like active"><i class="ti-thumb-up"></i> 12</a>--}}
{{--                                        <a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>--}}
{{--                                        <a href="#" class="comment-love active"><i class="ti-heart"></i> 07</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--reviews-comments-item end-->--}}

                        </div>
                    </div>

                    <!-- Submit Reviews -->
                    <div class="edu_wraper border">
                        <h4 class="edu_title">ارسال نظر شما</h4>
                        <div class="review-form-box form-submit">
                            @auth()
                                <form action="{{ route('comment.store') }}" id="comment">
                                    <div class="row">
                                        {{--                                        <div class="col-lg-6 col-md-6 col-sm-12">--}}
                                        {{--                                            <div class="form-group">--}}
                                        {{--                                                <label>نام</label>--}}
                                        {{--                                                <input class="form-control" type="text" placeholder="نام شما">--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}

                                        {{--                                        <div class="col-lg-6 col-md-6 col-sm-12">--}}
                                        {{--                                            <div class="form-group">--}}
                                        {{--                                                <label>ایمیل</label>--}}
                                        {{--                                                <input class="form-control" type="email" placeholder="ایمیل شما">--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        @csrf()
                                        <input type="hidden" value="{{$course->id}}" name="object_id">
                                        <input type="hidden" value="Course" name="model">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>متن دیدگاه</label>
                                                <textarea class="form-control ht-140" placeholder="دیدگاه خود را وارد نمایید" name="body"></textarea>
                                                <div class="invalid-feedback">
                                                    پیام حداقل سه حرف باشد.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-theme">ثبت دیدگاه</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            @endauth

                            @guest()
                                <p class="h6">برای ثبت نظر <a class="theme-cl" href="/login">وارد</a> شوید.</p>
                            @endguest

                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-4">

                    <div class="ed_view_box border">

                        <div class="property_video sm">
                            <div class="thumb">
                                <img class="pro_img img-fluid w100" src="{{$course->img}}" alt="7.jpg">
{{--                                <div class="overlay_icon">--}}
{{--                                    <div class="bb-video-box">--}}
{{--                                        <div class="bb-video-box-inner">--}}
{{--                                            <div class="bb-video-box-innerup">--}}
{{--                                                <a href="https://www.aparat.com/video/video/embed/videohash/cNpW0/vt/frame" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <div class="ed_view_price pl-4">
                            <span>قیمت آموزش</span>
                            <h2 class="theme-cl">@if($course->price==null||$course->price=='0') رایگان @else {{$course->price}} تومان @endif</h2>
                        </div>
                        @auth()
                            <div class="ed_view_link">
                                @if(\App\Models\Factor::where('user_id',auth()->user()->id)->leftJoin('factor_objects','factors.id','factor_objects.factor_id')->where('is_paid',1)->where('object_id',$course->id)->where('lu_object_type','Course')->count()>0)
                                    <a href="#" class="btn btn-theme enroll-btn">ثبت نام شده</a>
                                @else
                                    <a href="/cart/{{$course->id}}" class="btn btn-theme enroll-btn" id="@guest() buyCourse @endguest">خرید دوره دانلودی<i class="ti-angle-left"></i></a>
                                @endif
                            </div>
                        @endauth
                        @guest()
                            <div class="ed_view_link">
                                    <a href="#" class="btn btn-theme enroll-btn" id="buyCourse">خرید دوره دانلودی<i class="ti-angle-left"></i></a>
                            </div>
                        @endguest
                    </div>

                    <div class="edu_wraper border">
                        <h4 class="edu_title">ویژگی های دوره</h4>
                        <ul class="edu_list right">
                            <li><i class="ti-user"></i>شرکت کنندگان:<strong>{{\App\Models\Factor::where('is_paid',1)->leftJoin('factor_objects','factors.id','factor_objects.factor_id')->where('object_id',$course->id)->where('lu_object_type','Course')->count()+15}} نفر</strong></li>
                            <li><i class="ti-files"></i>جلسات:<strong>{{\App\Models\CourseContent::where('course_id',$course->id)->where('is_main','!=',1)->count()}}</strong></li>
                            @php($time=\App\Models\CourseContent::where('course_id',$course->id)->where('is_main','!=',1)->get()->sum('time'))
                            <li><i class="ti-time"></i>مدت دوره:<strong>@if(floor($time/60)!=0) {{floor($time/60)}}ساعت  @endif{{$time%60}}دقیقه</strong></li>
                            <li><i class="ti-tag"></i>سطح دوره:<strong>مقدماتی تا پیشرفته</strong></li>
                            <li><i class="ti-flag-alt"></i>زبان:<strong>فارسی</strong></li>
                            <li><i class="ti-shine"></i>نوع دوره:<strong>@if($course->price==0||$course->price==null) رایگان @else ویژه @endif</strong></li>
                            <li><i class="ti-pulse"></i>درصد پیشرفت دوره:({{$course->progress}}%)
                                <div class="progress mt-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="{{$course->progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$course->progress}}%"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Course Detail ================================== -->
    <!-- first buy for download Modal -->
    <div class="modal fade show" id="firstBuyForDownloadModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">دانلود دوره</h4>
                    <div class="my-3">
                        <p style="font-size: 18px;">برای دانلود دوره ابتدا در دوره ثبت نام نمائید.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- download Modal -->
    <div class="modal fade show" id="firstLoginForDownloadModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">دانلود دوره</h4>
                    <div class="my-3">
                        <p style="font-size: 18px;">برای دانلود دوره ابتدا وارد حساب کاربری خود شوید</p>
                    </div>
                    <div class="social-login ntr mb-3">
                        <ul>
                            <li><a href="/login" class="btn connect-fb">ورود</a></li>
                            <li><a href="/register" class="btn connect-google">ثبت نام</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->


    <!-- buy In Modal -->
    <div class="modal fade show" id="buyModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">خرید دوره</h4>
                    <div class="my-3">
                        <p style="font-size: 18px;">برای خرید دوره ابتدا وارد حساب کاربری خود شوید</p>
                    </div>
                    <div class="social-login ntr mb-3">
                        <ul>
                            <li><a href="/login" class="btn connect-fb">ورود</a></li>
                            <li><a href="/register" class="btn connect-google">ثبت نام</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection


@section('script')
<script>
    $('#buyCourse').click(function (event){
        event.preventDefault();
        $('#buyModal').modal('show');
    });

    $('[data-action=firstLoginForDownloadCourse]').click(function (event){
        event.preventDefault();
        $('#firstLoginForDownloadModal').modal('show');
    });

    $('[data-action=firstBuyForDownloadCourse]').click(function (event){
       event.preventDefault();
       $('#firstBuyForDownloadModal').modal('show');
    });




</script>
@endsection
