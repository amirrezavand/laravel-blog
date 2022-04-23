@extends('admin.layouts.master')

@section('title','User')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>User</h3>
                <p class="text-subtitle text-muted">For Create and Edit user</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Blog</a></li>
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
                        <h4 class="card-title">User</h4>
                    </div>

                    <div class="card-body">
                        <form method="post" action="@if(getRouteAction()=='create') {{route('admin.user.store')}} @else {{ route('admin.user.update',['user'=>$user->id])}} @endif" enctype="multipart/form-data">
                            @csrf()
                            @if(getRouteAction()=='edit') @method('put') @endif
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                           placeholder="Name" value="{{old('name',$user->name)}}" name="name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                           placeholder="Email" value="{{old('email',$user->email)}}" name="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                           placeholder="Password" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="passwordConfirmation">Password Confirmation</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="PasswordConfirmation"
                                           placeholder="Password Confirmation" name="password_confirmation">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-inline-block me-2 mb-1">
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input form-check-info form-check-glow" @if($user->is_staff==1) checked @endif name="is_staff" id="isStaff" value="1">
                                                <label class="form-check-label" for="isStaff">Is Staff</label>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="d-inline-block me-2 mb-1">
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input form-check-info form-check-glow" @if($user->is_admin==1) checked @endif name="is_admin" id="isAdmin" value="1">
                                                <label class="form-check-label" for="isAdmin">Is Admin</label>
                                            </div>
                                        </div>
                                    </li>

                                    @if(is_null($user->email_verified_at))
                                        <li class="d-inline-block me-2 mb-1">
                                            <div class="form-check">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="is_verify_email" id="isVerifyEmail">
                                                    <label class="form-check-label" for="isVerifyEmail">Is Verify Email</label>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                </ul>

                                <div class="mt-2">
                                    <button class="btn btn-success btn-sm" type="submit">@if(getRouteAction()=='create') save @else edit @endif</button>
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



