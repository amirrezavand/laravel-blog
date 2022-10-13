@extends('front.layouts.master')

@section('page_title' , 'طرح های جدید')

@section('content')

    <!-- ============================ Dashboard: Dashboard Start ================================== -->
    <section class="gray pt-5">
        <div class="container-fluid">

            <div class="row">

                @include('front.dashboard.includes.dashboard-sidebar')

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">نظر</li>
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
                                        <h4>نظر خود را ثبت نمایید</h4>
                                    </div>
                                </div>
                                <div class="dashboard_container_body p-4">
                                    <!-- Basic info -->

                                    <!-- Basic info -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->

                </div>

            </div>
            <!-- Row -->

        </div>
    </section>
    <!-- ============================ Dashboard: My Order Start End ================================== -->
@endsection()
