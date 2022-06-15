@extends('front.layouts.master')

@section('page_title','Blogs')

@section('content')
    <!-- Start Blog Area -->
    <section class="blog-area blog-section ptb-100">
        <div class="container">
            <div class="row">
                @foreach($results as $result)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-blog-post" style="height: 100%;position:relative;">
                            <a href="{{route('blog.single',['blog'=>$result->id])}}" class="post-image"><img src="{{$result->img}}" alt="{{$result->title}}"></a>

                            <div class="blog-post-content pb-5">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">Admin</a></li>
                                    <li><i class="icofont-wall-clock"></i> January 23, 2019</li>
                                </ul>
                                <h3><a href="{{route('blog.single',['blog'=>$result->id])}}">{{$result->title}}</a></h3>
                                <p>{{$result->short_description}}</p>
                                <a href="{{route('blog.single',['blog'=>$result->id])}}" class="read-more-btn" style="position: absolute; bottom: 20px;">Read More <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">

                                <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-left"></i></a></li>

                                <li class="page-item active"><a class="page-link" href="#">1</a></li>

                                <li class="page-item"><a class="page-link" href="#">2</a></li>

                                <li class="page-item"><a class="page-link" href="#">3</a></li>

                                <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
