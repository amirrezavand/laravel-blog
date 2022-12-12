@extends('front.layouts.master')

@section('page_title' , 'سفارشات من')

@section('content')

    <!-- ============================ Dashboard: Dashboard Start ================================== -->
    <section class="gray pt-5">
        <div class="container-fluid">

            <div class="row">

                @include('front.dashboard.includes.sidebar')

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">سفارشات من</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /Row -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard_container">
                                <div class="dashboard_container_header">
                                    <div class="dashboard_fl_1">
                                        <h4>مشاهده لیست سفارشات</h4>
                                    </div>
                                </div>
                                <div class="dashboard_container_body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">کد</th>
                                                <th scope="col">عنوان</th>
                                                <th scope="col">تاریخ</th>
                                                <th scope="col">وضعیت</th>
                                                <th scope="col">جمع کل</th>
                                                {{--                                                <th scope="col">عملیات</th>--}}
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($factors as $factor)
                                                    <tr>
                                                        <th scope="row">#{{$factor->reference_id}}</th>
                                                        <th scope="row">{{$factor->title}}</th>
                                                        <td>{{\Morilog\Jalali\Jalalian::forge($factor->updated_at)->format('%d %B Y')}}</td>
                                                        <td><span class="payment_status complete">تکمیل</span></td>
                                                        <td>{{$factor->total_price}} ت</td>
                                                        {{--                                                <td>--}}
                                                        {{--                                                    <div class="dash_action_link">--}}
                                                        {{--                                                        <a href="#" class="view">مشاهده</a>--}}
                                                        {{--                                                        <a href="#" class="cancel">کنسل</a>--}}
                                                        {{--                                                    </div>--}}
                                                        {{--                                                </td>--}}
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /Row -->

                </div>

            </div>
            <!-- Row -->

        </div>

        </div>
        <!-- Row -->

        </div>
    </section>
    <!-- ============================ Dashboard: My Order Start End ================================== -->
@endsection()
