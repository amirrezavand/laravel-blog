@extends('admin.layouts.master')

@section('title','User')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Class</h3>
                <p class="text-subtitle text-muted">For Create and Edit class</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Class</a></li>
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
                        <h4 class="card-title">Class</h4>
                    </div>

                    <div class="card-body">
                        <form method="post"
                              action="@if(getRouteAction()=='create') {{route('admin.class.store')}} @else {{ route('admin.class.update',['class'=>$class->id])}} @endif"
                              enctype="multipart/form-data">
                            @csrf()
                            @if(getRouteAction()=='edit')
                                @method('put')
                            @endif
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control @error('description') is-invalid @enderror"
                                           id="description"
                                           placeholder="Description" value="{{old('name',$class->description)}}" name="description">
                                    @error('description')
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
                                        @endif</button>
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



