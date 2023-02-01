<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<!-- Start Navigation -->
<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#"><img src="/front/img/logo.png" class="logo" alt="" /></a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">


                <ul class="nav-menu">
                    @foreach(getHeader() as $item)
                        @if($item['view']=='all' || (auth()->check()==true?$item['view']=='auth':$item['view']=='guest'))
                            <li class="
{{--                            {{isNavItemActive($item['route_name'],array_column($item['child'], 'route_name'),'active')}}--}}
                            ">
                                <a href="{{$item['route_name']?route($item['route_name']):''}}">{{$item['title']}}<span class="submenu-indicator"></span></a>
                                @if($item['child'])
                                    <ul class="nav-dropdown nav-submenu">
                                        @foreach($item['child'] as $itemChild)
                                            @if($itemChild['view']=='all' || (auth()->check()==true?$itemChild['view']=='auth':$itemChild['view']=='guest'))
                                                <li><a href="{{$itemChild['route_name']?route($itemChild['route_name'],$itemChild['route_variable']):''}}">{{$itemChild['title']}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ul>

                <ul class="nav-menu nav-menu-social align-to-left">
                    @guest()
                        <li class="login_click light">
                            <a href="/login">ورود</a>
                        </li>
                        <li class="login_click">
                            <a href="/register">ثبت نام</a>
                        </li>
                    @else
                        <li class="login_click">
                            <a href="/dashboard/my_course">حساب کاربری</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->

