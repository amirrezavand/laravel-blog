<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title')</title>

    <!-- Custom CSS -->
    <link href="/front/css/styles.css" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="/front/css/colors.css" rel="stylesheet">
    <link rel="icon" href="/favicon.png" type="image/png">
</head>

<body class="red-skin rtl">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader"><div class="preloader"><span></span><span></span></div></div>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    @include('front.layouts.header')

    @yield('content')

    @include('front.include.news_letter')
    @include('front.layouts.footer')

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">ورود به حساب</h4>
                    <div class="login-form">
                        <form>

                            <div class="form-group">
                                <label>نام کاربری</label>
                                <input type="text" class="form-control" placeholder="نام کاربری">
                            </div>

                            <div class="form-group">
                                <label>رمز عبور</label>
                                <input type="password" class="form-control" placeholder="*******">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">ورود به حساب</button>
                            </div>

                        </form>
                    </div>

                    <div class="social-login mb-3">
                        <ul>
                            <li>
                                <input id="reg" class="checkbox-custom" name="reg" type="checkbox">
                                <label for="reg" class="checkbox-custom-label">ذخیره رمزعبور</label>
                            </li>
                            <li class="left"><a href="#" class="theme-cl">رمز عبور خود را فراموش کرده اید؟</a></li>
                        </ul>
                    </div>

                    <div class="modal-divider"><span>یـا</span></div>
                    <div class="social-login ntr mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google</a></li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <p class="mt-2">حساب کاربری دارید؟ <a href="register.html" class="link">ورود به اکانت</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">ثبت نام</h4>
                    <div class="login-form">
                        <form>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="نام کامل">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="پست الکترونیکی">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="نام کاربری">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="*******">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">ثبت نام</button>
                            </div>

                        </form>
                    </div>

                    <div class="modal-divider"><span>یـا</span></div>
                    <div class="social-login ntr mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google</a></li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <p class="mt-3"><i class="ti-user ml-1"></i>آیا حساب کاربری دارید؟ <a href="#" class="link">ورود به حساب کاربری</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/front/js/jquery.min.js"></script>
<script src="/front/js/popper.min.js"></script>
<script src="/front/js/bootstrap.min.js"></script>
<script src="/front/js/select2.min.js"></script>
<script src="/front/js/slick.js"></script>
<script src="/front/js/jquery.counterup.min.js"></script>
<script src="/front/js/counterup.min.js"></script>
<script src="/front/js/custom.js"></script>

<!-- toast -->
<link href="/front/js/plugin/jquery.toast.css" rel="stylesheet">
<script src="/front/js/plugin/jquery.toast.js"></script>
<script>

</script>
<script>
    $('#newsLetter [type=submit]').click(function (event){
        event.preventDefault();
        let email=$('#newsLetter [type=email]').eq(0).val();

        if(isEmail(email)){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url : "{{ route('email.store') }}",
                data : {'email' : email},
                type : 'POST',
                dataType : 'json',
                success : function(result){

                    if(result.status) showToast('ثبت گردید',result.message,'success');
                    else showToast('خطا',result.message,'error')

                },
                error : function (error){
                    showToast('خطا','مشکلی در ثبت ایمیل رخ داده است، لطفا مجدد امتحان کنید.','error')
                }
            });
        }else {
            showToast('خطا','لطفا ایمیل معتبر وارد نمایید.','error')
        }
    })

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    function showToast(title,description,status){
        $.toast({
            heading: title,
            text: description,
            position: 'top-right',
            stack: false,
            icon: status,
            hideAfter: 1500
        })
    }
</script>
@yield('script')
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>
</html>
