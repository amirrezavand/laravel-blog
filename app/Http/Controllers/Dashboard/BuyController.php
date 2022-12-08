<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Factor;
use App\Models\FactorObject;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function registerCourseFactorAndSendBank($id){
        $course=Course::where('id',$id)->first();
        //dd($course);
        //'title','lu_status','total_price','is_paid','paid_date'
        $factor=Factor::create([
            'user_id'=>auth()->user()->id,
            'title'=>$course->title,
            'lu_status'=>'no_pay',
            'total_price'=>$course->price,
            'is_paid'=>0,
            'paid_date'=>now()
        ]);
        FactorObject::create([
            'factor_id'=>$factor->id,
            'object_id'=>$course->id,
            'price'=>$course->price,
            'lu_object_type'=>'Course'
        ]);


        $response = zarinpal()
            ->amount(1000) // مبلغ تراکنش
            ->request()
            ->description('خرید دوره ') // توضیحات تراکنش
            ->callbackUrl('https://caffegis.com/dashboard/is_paid') // آدرس برگشت پس از پرداخت
            ->mobile('09100968228') // شماره موبایل مشتری - اختیاری
            ->email('ar.rezavand@gmail.com') // ایمیل مشتری - اختیاری
            ->send();

        if (!$response->success()) {
            return $response->error()->message();
        }

        return $response->redirect();
    }

    public static function checkIsPaid(){
        $authority = request()->query('Authority'); // دریافت کوئری استرینگ ارسال شده توسط زرین پال
        $status = request()->query('Status'); // دریافت کوئری استرینگ ارسال شده توسط زرین پال

        $response = zarinpal()
            ->amount(1000)
            ->verification()
            ->authority($authority)
            ->send();

        if (!$response->success()) {
            return $response->error()->message();
        }

// دریافت هش شماره کارتی که مشتری برای پرداخت استفاده کرده است
// $response->cardHash();

// دریافت شماره کارتی که مشتری برای پرداخت استفاده کرده است (بصورت ماسک شده)
// $response->cardPan();

// پرداخت موفقیت آمیز بود
// دریافت شماره پیگیری تراکنش و انجام امور مربوط به دیتابیس
        dd($response->referenceId(),$authority,$status);
    }


}
