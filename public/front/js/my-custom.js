$(document).ready(function (){
    if($('#newsLetter').length)
        $('#newsLetter [type=submit]').click(function (event){
        event.preventDefault();
        let emailElement=$('#newsLetter [type=email]').eq(0);
        let url=$('#newsLetter').attr('action');

        if(isEmail(emailElement.val())){
            showPreloader();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url : url,
                data : {'email' : p2e(a2e(emailElement.val())) },
                type : 'POST',
                dataType : 'json',
                success : function(result){

                    if(result.status) {
                        showToast('ثبت گردید',result.message,'success');
                        emailElement.val('')
                    }
                    else showToast('خطا',result.message,'error')
                    hidePreloader();
                },
                error : function (error){
                    showToast('خطا','مشکلی در ثبت ایمیل رخ داده است، لطفا مجدد امتحان کنید.','error')
                    hidePreloader();
                }
            });
        }else {
            showToast('خطا','لطفا ایمیل معتبر وارد نمایید.','error')
        }
    });

    if($('#contactUS').length)
        $('#contactUS [type=submit]').click(function (event){
            event.preventDefault();
            let isValid=true;
            let element=$('#contactUS [name=name]').removeClass('is-invalid');
            if(!isMinLength(element.val(),3)){
                isValid=false;
                element.addClass('is-invalid')
            }

            element=$('#contactUS [name=cell]').removeClass('is-invalid');
            if(!isCell(element.val())){
                isValid=false;
                element.addClass('is-invalid')
            }

            element=$('#contactUS [name=title]').removeClass('is-invalid');
            if(!isMinLength(element.val(),3)){
                isValid=false;
                element.addClass('is-invalid')
            }

            element=$('#contactUS [name=body]').removeClass('is-invalid');
            if(!isMinLength(element.val(),3)){
                isValid=false;
                element.addClass('is-invalid')
            }

            if(isValid){
                showPreloader();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : $('#contactUS').attr('action'),
                    data : {
                                'name' : $('#contactUS [name=name]').val(), 'cell' : $('#contactUS [name=cell]').val(),
                                'title' : $('#contactUS [name=title]').val(), 'body' : $('#contactUS [name=body]').val()
                            },
                    type : 'POST',
                    dataType : 'json',
                    success : function(result){

                        if(result.status) {
                            showToast('ثبت گردید',result.message,'success');
                            $('#contactUS [name=name]').val('');
                            $('#contactUS [name=cell]').val('');
                            $('#contactUS [name=title]').val('');
                            $('#contactUS [name=body]').val('');
                        }
                        else showToast('خطا',result.message,'error')
                        hidePreloader();
                    },
                    error : function (error){
                        showToast('خطا','مشکلی در ثبت درخواست رخ داده است، لطفا مجدد امتحان کنید.','error')
                        hidePreloader();
                    }
                });
            }else {
                showToast('خطا','لطفا اطلاعات را با دقت وارد نمائید.','error')
            }
        })




    if($('#register').length)
        $('#register [type=submit]').click(function (event){
            let elementName='#register'
            event.preventDefault();
            let isValid=true;
            let element=$(elementName+' [name=first_name]').removeClass('is-invalid');
            if(!isMinLength(element.val(),3)){
                isValid=false;
                element.addClass('is-invalid')
            }
            element=$(elementName+' [name=last_name]').removeClass('is-invalid');
            if(!isMinLength(element.val(),3)){
                isValid=false;
                element.addClass('is-invalid')
            }


            element=$(elementName+' [name=password]').removeClass('is-invalid');
            if(!isMinLength(element.val(),8)){
                isValid=false;
                element.addClass('is-invalid')
            }

            if(isValid){
                showPreloader();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : $(elementName).attr('action'),
                    data : {
                        'first_name' : $(elementName+' [name=first_name]').val(),
                        'last_name' : $(elementName+' [name=last_name]').val(),
                        'password' : $(elementName+' [name=password]').val(),
                        'password_confirmation' : $(elementName+' [name=password_confirmation]').val(),
                    },
                    type : 'POST',
                    dataType : 'json',
                    success : function(result){
                        if(result.status) {
                            showToast('ثبت گردید',result.message,'success');
                            $(elementName+' [name=first_name]').val('');
                            $(elementName+' [name=last_name]').val('');
                            $(elementName+' [name=password]').val('');
                            $(elementName+' [name=password_confirmation]').val('');
                            window.location.href = '/';
                        }
                        else showToast('خطا',result.message,'error')
                        hidePreloader();
                    },
                    error : function (error){
                        showToast('خطا','مشکلی در ثبت نام رخ داده است، لطفا مجدد امتحان کنید.','error')
                        hidePreloader();
                    }
                });
            }else {
                showToast('خطا','لطفا اطلاعات را با دقت وارد نمائید.','error')
            }
        })


    if($('#discountCode').length)
        $('#discountCode [type=submit]').click(function (event){
            event.preventDefault();

            let codeElement=$('#discountCode [name=code]')[0];
            let url=$('#discountCode').attr('action');


            if(codeElement.value.length>3){
               showPreloader();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : url,
                    data : {'code' : p2e(a2e(codeElement.value)) },
                    type : 'POST',
                    dataType : 'json',
                    success : function(result){
                        if(result.status) {
                            showToast('موفقیت',result.message,'success');

                            if(result.data.type=="percent") {
                                $('#discountPrice').html(Number($('#priceBeforeDiscount').html())*Number(result.data.amount)/100);
                                $('#priceAfterDiscount').html(Number($('#priceBeforeDiscount').html())*(100-Number(result.data.amount))/100);
                                $('#verifiedCode').val(p2e(a2e(codeElement.value)));
                            }

                            hidePreloader();
                        }
                        else showToast('خطا',result.message,'error')
                        hidePreloader();
                    },
                    error : function (error){
                        showToast('خطا','مشکلی در صحت سنجی کد تخفیف رخ داده است، لطفا مجدد امتحان کنید.','error')
                        hidePreloader();
                    }
                });
            }else {
                showToast('خطا','لطفا کد تخفیف معتبر وارد نمایید.','error')
            }
        });

});


function isEmail(email) {
    email=p2e(a2e(email));
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function isCell(cell) {
    cell=p2e(a2e(cell));
    var regex = /^(\+98?)?{?(0?9[0-9]{9,9}}?)$/;
    return regex.test(cell);
}


function isMinLength(str,minLength){
    return str.length>=minLength;
}

function showToast(title,description,status){
    $.toast({
        heading: title,
        text: description,
        position: 'top-right',
        stack: false,
        icon: status,
        hideAfter: 1500
    });
}

function showPreloader(){
    $('#preloader .preloader').css('display','block');
}

function hidePreloader(){
    $('#preloader .preloader').css('display','none');
}

const e2p = s => s.replace(/\d/g, d => '۰۱۲۳۴۵۶۷۸۹'[d]);
const e2a = s => s.replace(/\d/g, d => '٠١٢٣٤٥٦٧٨٩'[d]);

const p2e = s => s.replace(/[۰-۹]/g, d => '۰۱۲۳۴۵۶۷۸۹'.indexOf(d));
const a2e = s => s.replace(/[٠-٩]/g, d => '٠١٢٣٤٥٦٧٨٩'.indexOf(d));

const p2a = s => s.replace(/[۰-۹]/g, d => '٠١٢٣٤٥٦٧٨٩'['۰۱۲۳۴۵۶۷۸۹'.indexOf(d)]);
const a2p = s => s.replace(/[٠-٩]/g, d => '۰۱۲۳۴۵۶۷۸۹'['٠١٢٣٤٥٦٧٨٩'.indexOf(d)]);



$('#verifyPhone [type=submit]').click(function (e) {
    e.preventDefault();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: $("#verifyPhone form").eq(0).attr('action'),
        data: {
            "phone_number": $('#verifyPhone [name=phone_number]').val(),
            "captcha": $('#verifyPhone [name=captcha]').val(),
        },

        type: 'POST',
        dataType: 'json',
        success: function (result) {
            if (result.status) {
                showToast(' موفقیت در درخواست', result.message, 'success');
                $("#register [name=phone_number]").val($('#verifyPhone [name=phone_number]').val())
                $('#verifyPhone [name=phone_number]').val('');
                $('#verifyPhone [name=captcha]').val('');
                $('#verifyPhone').addClass('d-none');
                $('#verifyOtp').removeClass('d-none');
            } else showToast('خطا', result.message, 'error');
            getCaptcha();
        },
        error: function (error) {
            showToast('خطا', 'مشکلی در ثبت درخواست رخ داده است، لطفا مجدد امتحان کنید.', 'error');
            getCaptcha();
        }
    });
});


$('#verifyOtp [type=submit]').click(function (e) {
    e.preventDefault();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: $("#verifyOtp form").eq(0).attr('action'),
        data: {
            "otp_code": $('#verifyOtp [name=otp_code]').val(),
        },

        type: 'POST',
        dataType: 'json',
        success: function (result) {
            if (result.status) {
                showToast(' موفقیت در درخواست', result.message, 'success');
                $('#verifyOtp [name=otp_code]').val('');
                $('#verifyOtp').addClass('d-none');
                $('#register').removeClass('d-none');
            } else showToast('خطا', result.message, 'error');
        },
        error: function (error) {
            showToast('خطا', 'مشکلی در ثبت درخواست رخ داده است، لطفا مجدد امتحان کنید.', 'error');
        }
    });
});

if($('#logout').length)
    $('#logout').click(function (event) {
        event.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/logout',
            type: 'POST',
            dataType: 'json',
            success: function (result) {
                if (result.status) {
                    location.href='/'
                }
            }
        });
    })


function getCaptcha() {

    document.querySelector(".captcha-image").src = '/captcha' + "?" + Date.now();
}
