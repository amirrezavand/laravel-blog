<!-- Start Navbar Area -->
<header id="header">
    <div class="crake-mobile-nav">
        <div class="logo">
            <img src="/front/assets/img/logo.png" alt="">
        </div>
    </div>

    <div class="crake-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html"><img src="/front/assets/img/logo.png" alt="logo"></a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav">
                        @foreach(getHeader() as $item)
                            @if($item['view']=='all' || (auth()->check()==true?$item['view']=='auth':$item['view']=='guest'))
                                <li class="nav-item">
                                    <a href="{{$item['route_name']?route($item['route_name']):''}}" class="nav-link {{isNavItemActive($item['route_name'],array_column($item['child'], 'route_name'),'active')}}">{{$item['title']}}</a>
                                    @if($item['child'])
                                        <ul class="dropdown_menu">
                                            @foreach($item['child'] as $itemChild)
                                                @if($itemChild['view']=='all' || (auth()->check()==true?$itemChild['view']=='auth':$itemChild['view']=='guest'))
                                                    <li><a href="{{$itemChild['route_name']?route($itemChild['route_name']):''}}" class="{{isNavItemActive($itemChild['route_name'],array_column($itemChild['child'], 'route_name'),'active')}}">{{$itemChild['title']}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="mr-auto others-option">
                    <ul class="navbar-nav">
                        <li class="header-search-box">
                            <a href="#header-search" title="Search">
                                <i class="icofont-search-2"></i>
                            </a>
                        </li>
                        <li data-toggle="modal" data-target="#myModal2">
                            <div class="side-menu">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End Navbar Area -->
