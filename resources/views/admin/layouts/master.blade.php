<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/admin/css/bootstrap.css">

    <link rel="stylesheet" href="/admin/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/admin/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/admin/css/app.css">
    <link rel="icon" type="image/png" href="/front/assets/img/favicon.png">
</head>

<body>
<div id="app">
    @include('admin.layouts.sidebar')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            @yield('content')
        </div>

        @include('admin.layouts.footer')
    </div>
</div>
<script src="/admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/admin/js/bootstrap.bundle.min.js"></script>

<script src="/admin/js/mazer.js"></script>
<script src="/front/js/jquery.min.js"></script>
<script src="/front/js/popper.min.js"></script>
<!-- toast -->
<link href="/front/js/plugin/jquery.toast.css" rel="stylesheet">
<script src="/front/js/plugin/jquery.toast.js"></script>

<!-- select2 JQuery -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@yield('script')
</body>

</html>
