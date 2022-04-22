@extends('admin.layouts.master')


@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Blog</h3>
                <p class="text-subtitle text-muted">For Create and Edit blog</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Form start -->
    <section id="input-validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Blog</h4>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{route('admin.blog.store')}}" enctype="multipart/form-data">
                            @csrf()
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Title" value="{{$blog->title}}" name="title">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                           placeholder="Slug" value="{{$blog->slug}}" name="slug">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="body">Body</label>
                                    <textarea class="form-control @error('body') is-invalid @enderror" id="body" placeholder="body" rows="3" name="body">{{$blog->body}}</textarea>
                                    @error('body')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="shortDescription">Short Description</label>
                                    <input type="text" class="form-control @error('short_description') is-invalid @enderror" id="slug"
                                           placeholder="Short Description" value="{{$blog->short_description}}" name="short_description">
                                    @error('short_description')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="img">image</label>
                                    <input class="form-control form-control-sm  @error('img') is-invalid @enderror" id="img" type="file" name="img">
                                    @error('img')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="studyTime">Study Time</label>
                                    <input type="number" class="form-control form-control-sm @error('study_time') is-invalid @enderror" id="studyTime"
                                           placeholder="Study Time" value="{{$blog->study_time}}" name="study_time">
                                    @error('study_time')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="seoKeywords">Seo Keywords</label>
                                    <input type="text" class="form-control form-control-sm @error('seo_keywords') is-invalid @enderror" id="seoKeywords"
                                           placeholder="Seo Keywords" value="{{$blog->seo_keywords}}" name="seo_keywords">
                                    @error('seo_keywords')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="seoDescription">Seo Description</label>
                                    <input type="text" class="form-control form-control-sm @error('seo_description') is-invalid @enderror" id="seoDescription"
                                           placeholder="Seo Keywords" value="{{$blog->seo_description}}" name="seo_description">
                                    @error('seo_description')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-success btn-sm" type="submit">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- form end -->
@endsection



