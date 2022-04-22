@extends('admin.layouts.master')

@section('title','Blog')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Blogs</h3>
                <p class="text-subtitle text-muted">For management blogs</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Striped rows start -->
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Blog items ( total : {{$blogs->total()}} )</h4>
                        <a class="btn btn-success btn-sm" href="{{route('admin.blog.create')}}">Create <i class="bi bi-plus position-relative" style="top: 3px;"></i></a>
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th class="px-4">#</th>
                                    <th>TITLE</th>
                                    <th>AUTHOR</th>
                                    <th>OPERATE</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td class="px-4">{{$blog->id}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->user->name}}</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="{{route('admin.blog.edit',['blog'=>$blog->id])}}">edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault(); document.getElementById('delete-{{$loop->index}}').submit();">delete</a>
                                            <form action="{{route('admin.blog.destroy',['blog'=>$blog->id])}}" method="post" class="d-none" id="delete-{{$loop->index}}">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            {{$blogs->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Striped rows end -->
@endsection



