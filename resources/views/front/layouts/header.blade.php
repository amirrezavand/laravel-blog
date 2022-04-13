<!-- Start Navbar Area -->
<header id="header">
    <div class="crake-mobile-nav">
        <div class="logo">
            <img src="/assets/img/logo.png" alt="">
        </div>
    </div>

    <div class="crake-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html"><img src="/assets/img/logo.png" alt="logo"></a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav ml-auto">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('blog')}}" class="nav-link">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('contact_us')}}" class="nav-link">contact us</a>
                            <ul class="dropdown_menu">
                                <li><a href="{{route('our_team')}}">our team</a></li>
                                <li><a href="{{route('about_us')}}">about us</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link active">login</a>
                        </li>
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
