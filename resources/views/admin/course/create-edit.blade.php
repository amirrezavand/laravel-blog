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
                                <div class="col-sm-6">
                                    <label for="">Tag</label>
                                    <select class="form-control select2" multiple="multiple" name="tag[]">
                                        @foreach($tags as $tag)
                                            <option @if(in_array($tag->title,old('tag',$course->tags()->get()->pluck('title')->toArray())??[])) selected @endif>{{$tag->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('tag')
                                    <div class="invalid-feedback">
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Content</h4>
                    </div>
                    <div class="card-body">
                        <div class="border border-primary p-3 my-2" id="courseContentAdd" data-action="/admin/course_content">
                            <input type="hidden" value="{{$course->id}}" name="course_id">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control " placeholder="title" value="" name="title">
                                </div>
                                <div class="col-sm-6">
                                    <label>Url</label>
                                    <input type="text" class="form-control " placeholder="url" value="" name="url">
                                </div>
                                <div class="col-sm-6">
                                    <label>Section</label>
                                    <input type="number" class="form-control " placeholder="section" value="" name="section">
                                </div>
                                <div class="col-sm-6">
                                    <label>Sequence</label>
                                    <input type="number" class="form-control " placeholder="sequence" value="" name="sequence">
                                </div>
                                <div class="col-sm-6">
                                    <label>time( minute)</label>
                                    <input type="number" class="form-control " placeholder="time( minute)" value="" name="time">
                                </div>
                                <div class="col-12 form-group">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" name="is_main" class="form-check-input" checked="">
                                            <label>is main</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 form-group">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" name="is_free" class="form-check-input" checked="">
                                            <label>is free</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success btn-sm" type="submit">
                                        save
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="border border-primary p-3 my-2" id="courseContentEdit">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- form end -->

@endsection

@section('script')
    <script>
        $(document).ready(function (){
            let elementName="#courseContentAdd";
            if($(elementName).length){
                $(elementName+' button').click(function (event){
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url : $(elementName).attr('data-action'),
                        data : {
                            'course_id' : $(elementName+' [name=course_id]').val(),
                            'title' : $(elementName+' [name=title]').val(),
                            'url' : $(elementName+' [name=url]').val(),
                            'section' : $(elementName+' [name=section]').val(),
                            'sequence' : $(elementName+' [name=sequence]').val(),
                            'time' : $(elementName+' [name=time]').val(),
                            'is_free' : $(elementName+' [name=is_free]').is(':checked')?1:0,
                            'is_main' : $(elementName+' [name=is_main]').is(':checked')?1:0,
                        },
                        type : 'POST',
                        dataType : 'json',
                        success : function(result){

                            if(result.status) {
                                showToast('ثبت گردید',result.message,'success');
                                $(elementName+' [name=title]').val('');
                                $(elementName+' [name=url]').val('');
                                $(elementName+' [name=section]').val('');
                                $(elementName+' [name=sequence]').val('');
                                $(elementName+' [name=time]').val('');
                                $(elementName+' [name=is_free]').prop('checked', false);
                                $(elementName+' [name=is_main]').prop('checked', false);
                                getAndDisplayCourseContetns();
                            }
                            else showToast('خطا',result.message,'error')
                        },
                        error : function (error){
                            showToast('خطا','مشکلی در ثبت داده رخ داده است، لطفا مجدد امتحان کنید.','error')
                        }
                    });
                });
            }
        })

        function deleteCourseContent(id){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url : `/admin/course_content/${id}`,
                type : 'DELETE',
                dataType : 'json',
                success : function(result) {
                    getAndDisplayCourseContetns();
                }
            });
        }

        function editCourseContent(id){
            let elementName=`#courseContent${id}`
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url : `/admin/course_content/${id}`,
                data : {
                    'title' : $(elementName+' [name=title]').val(),
                    'url' : $(elementName+' [name=url]').val(),
                    'section' : $(elementName+' [name=section]').val(),
                    'sequence' : $(elementName+' [name=sequence]').val(),
                    'time' : $(elementName+' [name=time]').val(),
                    'is_free' : $(elementName+' [name=is_free]').is(':checked')?1:0,
                    'is_main' : $(elementName+' [name=is_main]').is(':checked')?1:0,
                },
                type : 'PUT',
                dataType : 'json',
                success : function(result){

                    if(result.status) {
                        showToast('ویرایش گردید',result.message,'success');
                        getAndDisplayCourseContetns();
                    }
                    else showToast('خطا',result.message,'error')
                },
                error : function (error){
                    showToast('خطا','مشکلی در ویرایش داده رخ داده است، لطفا مجدد امتحان کنید.','error')
                }
            });
        }

        function getAndDisplayCourseContetns(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url : '/admin/course_content?course_id={{$course->id}}',
                type : 'GET',
                dataType : 'json',
                success : function(result){
                    $("#courseContentEdit").empty();

                    for (let i=0;i<result.data.courseContents.length;i++){
                        $("#courseContentEdit").append(`
                            <div class="row border-bottom py-2 border-primary" id="courseContent${result.data.courseContents[i].id}">
                                <div class="col-sm-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control " placeholder="title" value="${result.data.courseContents[i].title}" name="title">
                                </div>
                                <div class="col-sm-6">
                                    <label>Url</label>
                                    <input type="text" class="form-control " placeholder="url" value="${result.data.courseContents[i].url}" name="url">
                                </div>
                                <div class="col-sm-6">
                                    <label>Section</label>
                                    <input type="number" class="form-control " placeholder="section" value="${result.data.courseContents[i].section}" name="section">
                                </div>
                                <div class="col-sm-6">
                                    <label>Sequence</label>
                                    <input type="number" class="form-control " placeholder="sequence" value="${result.data.courseContents[i].sequence}" name="sequence">
                                </div>
                                <div class="col-sm-6">
                                    <label>time( minute)</label>
                                    <input type="number" class="form-control " placeholder="time( minute)" value="${result.data.courseContents[i].time}" name="time">
                                </div>
                                <div class="col-12 form-group">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" name="is_main" class="form-check-input" ${result.data.courseContents[i].is_main=='1'?'checked':''}>
                                            <label>is main</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 form-group">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" name="is_free" class="form-check-input" ${result.data.courseContents[i].is_free=='1'?'checked':''}>
                                            <label>is free</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-info btn-sm" type="submit" onclick="editCourseContent(${result.data.courseContents[i].id})">
                                        edit
                                    </button>
                                    <button class="btn btn-danger btn-sm" type="submit" onclick="deleteCourseContent(${result.data.courseContents[i].id})">
                                        delete
                                    </button>
                                </div>
                            </div>
                        `);
                    }
                }
            });
        }
        getAndDisplayCourseContetns();

        function showToast(title,description,status){
            $.toast({
                heading: title,
                text: description,
                position: 'top-right',
                stack: false,
                icon: status,
                hideAfter: 1500
            });
        }
    </script>

    <script>
        $(".select2").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
    </script>
@endsection


