$(document).ready(function (){
    $('#newsLetter [type=submit]').click(function (event){
        event.preventDefault();
        let email=$('#newsLetter [type=email]').eq(0).val();
        let url=$('#newsLetter').attr('action');

        if(isEmail(email)){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url : url,
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
    });
});


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
    });
}
