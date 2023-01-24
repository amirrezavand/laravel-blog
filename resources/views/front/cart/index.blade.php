@extends('front.layouts.master')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">ثبت نهایی سفارش</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ثبت نهایی سفارش</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Add To cart ================================== -->
    <section class="pt-0">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <div class="table-responsive">
                        <table class="table add_to_cart">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">قیمت</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="tb_course_thumb"><img src="{{$course->img}}" class="img-fluid" alt="" /></div></td>
                                    <th>{{$course->title}}</th>
                                    <td><span class="wish_price theme-cl">{{$course->price}}ت</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Coupon Apply -->
                    <div class="checkout_coupon checkout">
                        <div class="checkout_coupon_flex">
                            <form class="form-inline" action="/check_discount_code" method="post" id="discountCode">
                                @csrf()
                                <input class="form-control" type="text" placeholder="کد تخفیف" name="code">
                                <button type="submit" class="btn btn-theme2 mr-2">اعمال تخفیف</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <!-- Total Cart -->
                    <div class="cart_totals checkout">
                        <h4>صورت حساب</h4>
                        <div class="cart-wrap">
                            <ul class="cart_list">
                                <li>قیمت<strong><span id="priceBeforeDiscount">{{$course->price}}</span> تومان</strong></li>
                                <li>تخفیف<strong><span id="discountPrice">0</span> تومان</strong></li>
                            </ul>
                            <div class="flex_cart">
                                <div class="flex_cart_1">
                                    جمع کل
                                </div>
                                <div class="flex_cart_2">
                                    <span id="priceAfterDiscount">{{$course->price}}</span> تومان
                                </div>
                            </div>
                            <form action="{{route('buy.course',['id'=>$course->id])}}" method="post">
                                @csrf()
                                <input type="hidden" type="text" name="code" id="verifiedCode">
                                <button type="submit" class="btn checkout_btn">پرداخت</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Add To cart End ================================== -->
@endsection


@section('script')

@endsection
