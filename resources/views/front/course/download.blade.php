@extends('front.layouts.master')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">دانلود جلسات دوره</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->
    <!-- ============================ Full Width Courses  ================================== -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @guest()
                        <div class="alert alert-danger">
                            برای دانلود دوره ابتدا باید وارد وبسایت گردید.
                        </div>
                    @endguest

                    @auth()
                        @if($file->is_free==1)
                            <div class="alert alert-warning">
                                برای دانلود جلسه دوره <a href="{{$file->url}}">اینجا</a> کلیک کنید
                            </div>
                        @else
                            @if(\App\Models\Factor::where('user_id',auth()->user()->id)->leftJoin('factor_objects','factors.id','factor_objects.factor_id')->where('is_paid',1)->where('object_id',$file->course_id)->where('lu_object_type','Course')->count()>0)
                                <div class="alert alert-success">
                                    برای دانلود دوره <a href="{{$file->url}}">اینجا</a> کلیک کنید
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    برای دانلود دوره ابتدا باید دوره را خریداری نمائید یا در صورت رایگان بودن دوره در آن ثبت نام نمائید.
                                </div>
                            @endif
                        @endif
                    @endauth
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-info">
                        <a href="/courses/{{$file->course_id}}">بازگشت به صفحه دوره</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Full Width Courses End ================================== -->
@endsection
