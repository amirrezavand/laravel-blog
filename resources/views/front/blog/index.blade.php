@extends('front.layouts.master')

@section('page_title','Blogs')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        @if($title=='بلاگ')
                            <h1 class="breadcrumb-title">لیست بلاگ</h1>
                        @else
                            <h1 class="breadcrumb-title">{{$title}}</h1>
                        @endif
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                @if($title=='بلاگ')
                                    <li class="breadcrumb-item active" aria-current="page">لیست بلاگ</li>
                                @else
                                    <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                                @endif
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
                @foreach($results as $result)
                    <!-- Single Article -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="articles_grid_style">
                            <div class="articles_grid_thumb">
                                <a href="{{route('blog.single',['blog'=>$result->id])}}"><img src="{{$result->img}}" class="img-fluid" alt="" /></a>
                            </div>

                            <div class="articles_grid_caption">
                                <h4>{{$result->title}}</h4>
                                <div class="articles_grid_author">
                                    <div class="articles_grid_author_img"><img src="{{($result->author_avatar)?$result->author_avatar:'/upload/users/rezavand.jpeg'}}" class="img-fluid" alt="" /></div>
                                    <h4>{{$result->author_name}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

{{--                    <!-- Pagination -->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">--}}
{{--                            <button type="button" class="btn btn-loader"><i class="ti-reload ml-3"></i>فهرست کامل</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
            <!-- /Row -->

        </div>
    </section>
    <!-- ========================== Articles Section =============================== -->
@endsection
