@extends('admin.layouts.master')

@section('title','Contact Form')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Contact Forms</h3>
                <p class="text-subtitle text-muted">For management Contact Forms</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Forms</li>
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
                        <h4 class="card-title">Contact Form items ( total : {{$forms->total()}} )</h4>
                    </div>
                    <div class="row px-4">
                        <div class="col-12 col-md-6">
                            <form action="{{route('admin.contact_form.index')}}" method="get">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                                    <input type="text" class="form-control" name="keywords" placeholder="Key words"
                                           value="{{Request()->input('keywords')}}">
                                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th class="px-4">#</th>
                                    <th>Name</th>
                                    <th>Cell</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>OPERATE</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($forms as $form)
                                    <tr>
                                        <td class="px-4">{{$form->id}}</td>
                                        <td>{{$form->name}}</td>
                                        <td>{{$form->cell}}</td>
                                        <td>{{$form->title}}</td>
                                        <td>{{$form->body}}</td>

                                        <td>
                                            <a class="btn btn-danger btn-sm" href="#"
                                               onclick="event.preventDefault(); document.getElementById('delete-{{$loop->index}}').submit();">delete</a>
                                            <form
                                                action="{{route('admin.contact_form.destroy',['contact_form'=>$form->id])}}"
                                                method="post" class="d-none" id="delete-{{$loop->index}}">
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
                            {{$forms->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Striped rows end -->
@endsection



