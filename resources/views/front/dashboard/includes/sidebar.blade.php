<div class="col-lg-3 col-md-3">
    <div class="dashboard-navbar">

        <div class="d-user-avater">
            <img src="{{auth()->user()->avatar??'/front/img/avatar.png'}}" class="img-fluid avater" alt="">
            <h4>{{auth()->user()->name}}</h4>
        </div>

        <div class="d-navigation">
            <ul id="side-menu">
{{--                <li class="{{getRouteName() === 'dashboard' ? 'active' : ''}}"><a href="#"><i--}}
{{--                            class="ti-user"></i>دوره های من</a></li>--}}
{{--                <li class="{{getRouteName() === 'update.profile' ? 'active' : ''}}"><a--}}
{{--                        href="{{route('update.profile' , auth()->user()->id)}}"><i class="ti-pencil"></i>ویرایش اطلاعات</a>--}}
{{--                </li>--}}
{{--                <li class="{{getRouteName() === 'plan' ? 'active' : ''}}"><a href="{{route('plan')}}"><i--}}
{{--                            class="ti-heart"></i>طرح های من</a></li>--}}
{{--                <li class="{{getRouteName() === 'plan.create' ? 'active' : ''}}"><a href="{{route('plan.create')}}"><i--}}
{{--                            class="ti-plus"></i>طرح جدید</a></li>--}}
{{--                <li class="{{getRouteName() === 'comment' ? 'active' : ''}}"><a href="{{route('comment')}}"><i--}}
{{--                            class="ti-plus"></i>ثبت نظر</a></li>--}}
{{--                <li>--}}
{{--                    <a href="" onclick="event.preventDefault();document.getElementById('logout').submit()"><i--}}
{{--                            class="ti-power-off"></i>خروج</a>--}}
{{--                    <form action="{{route('logout')}}" method="POST" id="logout">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--                <li><a href="dashboard.html"><i class="ti-user"></i>داشبورد</a></li>--}}
                <li><a href="/dashboard/my_course"><i class="ti-shine"></i>دوره های من</a></li>
{{--                <li><a href="my-profile.html"><i class="ti-heart"></i>اکانت من</a></li>--}}
{{--                <li><a href="add-listing.html"><i class="ti-plus"></i>افزودن دوره جدید</a></li>--}}
{{--                <li><a href="saved-courses.html"><i class="ti-heart"></i>دوره های ذخیره شده</a></li>--}}
                <li class="active"><a href="my-order.html"><i class="ti-shopping-cart"></i>سفارشات من</a></li>
{{--                <li><a href="settings.html"><i class="ti-settings"></i>تنظیمات</a></li>--}}
{{--                <li><a href="reviews.html"><i class="ti-comment-alt"></i>لیست نظرات</a></li>--}}
                <li><a id="logout" style="cursor: pointer;"><i class="ti-power-off" ></i>خروج</a></li>
            </ul>
        </div>

    </div>
</div>
