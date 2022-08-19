@extends('admin.layouts.master')

@section('title','Course')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Course</h3>
                <p class="text-subtitle text-muted">For Create and Edit Corse</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.course.index')}}">Course</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create and Edit</li>
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
                        <h4 class="card-title">Course</h4>
                    </div>

                    <div class="card-body">
                        <form method="post"
                              action="@if(getRouteAction()=='create') {{route('admin.course.store')}} @else {{ route('admin.course.update',['course'=>$course->id])}} @endif"
                              enctype="multipart/form-data">
                            @csrf()
                            @if(getRouteAction()=='edit')
                                @method('put')
                            @endif
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                           id="title"
                                           placeholder="Title" value="{{old('title',$course->title)}}" name="title">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                           id="slug"
                                           placeholder="Slug" value="{{old('slug',$course->slug)}}" name="slug">
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="body">Body</label>
                                    <textarea class="form-control @error('body') is-invalid @enderror" id="body"
                                              placeholder="body" rows="3"
                                              name="body">{{old('body',$course->body)}}</textarea>
                                    @error('body')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="shortDescription">Short Description</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror" id="shortDescription"
                                              placeholder="short description" rows="3"
                                              name="short_description">{{old('short_description',$course->short_description)}}</textarea>
                                    @error('short_Description')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="luContentStatus">Content Status</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('lu_content_status') is-invalid @enderror"
                                                id="luContentStatus" name="lu_content_status">
                                            <option value=""></option>
                                            @foreach($contentStatuses as $item)
                                                <option value="{{$item->key}}"
                                                        @if($item->key==old('lu_content_status',$course ->lu_content_status)) selected @endif>{{$item->value}}</option>
                                            @endforeach
                                        </select>
                                        @error('lu_content_status')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </fieldset>
                                </div>

                                <div class="col-sm-6">
                                    <label for="img">image</label>
                                    <input class="form-control form-control-sm  @error('img') is-invalid @enderror"
                                           id="img" type="file" name="img">
                                    @error('img')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                    @if(! is_null($course->img))
                                        <div class="mt-1 position-relative"><img src="{{$course->img}}"
                                                                                 style="max-height: 100px;"> <a
                                                href="{{route('admin.course.delete_img',['course'=>$course->id])}}"
                                                class="position-absolute text-danger"
                                                style="top: 0;left: 5px;cursor: pointer;">&times;</a></div>
                                    @endif
                                </div>

                                <div class="col-sm-6">
                                    <label for="seoKeywords">Seo Keywords</label>
                                    <input type="text"
                                           class="form-control form-control-sm @error('seo_keywords') is-invalid @enderror"
                                           id="seoKeywords"
                                           placeholder="Seo Keywords"
                                           value="{{old('seo_keywords',$course->seo_keywords)}}" name="seo_keywords">
                                    @error('seo_keywords')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="seoDescription">Seo Description</label>
                                    <input type="text"
                                           class="form-control form-control-sm @error('seo_description') is-invalid @enderror"
                                           id="seoDescription"
                                           placeholder="Seo Keywords"
                                           value="{{old('seo_description',$course->seo_description)}}"
                                           name="seo_description">
                                    @error('seo_description')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="price">price(toman)</label>
                                    <input type="text"
                                           class="form-control form-control-sm @error('price') is-invalid @enderror"
                                           id="price"
                                           placeholder="price"
                                           value="{{old('price',$course->price)}}"
                                           name="price">
                                    @error('price')
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mt-2">
                                    <button class="btn btn-success btn-sm" type="submit">@if(getRouteAction()=='create')
                                            save
                                        @else
                                            edit
                                        @endif
                                    </button>
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



