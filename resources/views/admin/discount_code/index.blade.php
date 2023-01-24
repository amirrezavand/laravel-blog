@extends('admin.layouts.master')

@section('title','Discount Code')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Discount Code</h3>
                <p class="text-subtitle text-muted">For management discount code</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Discount Code</li>
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
                        <h4 class="card-title">Blog items ( total : {{$discountCodes->total()}} )</h4>
                        <a class="btn btn-success btn-sm" href="{{route('admin.discount_code.create')}}">Create <i
                                class="bi bi-plus position-relative" style="top: 3px;"></i></a>
                    </div>
                    <div class="row px-4">
                        <div class="col-12 col-md-6">
                            <form action="{{route('admin.discount_code.index')}}" method="get">
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
                                    <th>CODE</th>
                                    <th>TYPE</th>
                                    <th>AMOUNT</th>
                                    <th>IS ACTIVE</th>
                                    <th>OPERATE</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($discountCodes as $discountCode)
                                    <tr>
                                        <td class="px-4">{{$discountCode->id}}</td>
                                        <td>{{$discountCode->code}}</td>
                                        <td>{{$discountCode->lu_discount_type}}</td>
                                        <td>{{$discountCode->amount}}</td>
                                        <td>{{$discountCode->is_active}}</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm"
                                               href="{{route('admin.discount_code.edit',['discount_code'=>$discountCode->id])}}">edit</a>
                                            <a class="btn btn-danger btn-sm" href="#"
                                               onclick="event.preventDefault(); document.getElementById('delete-{{$loop->index}}').submit();">delete</a>
                                            <form
                                                action="{{route('admin.discount_code.destroy',['discount_code'=>$discountCode->id])}}"
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
                            {{$discountCodes->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Striped rows end -->
@endsection



