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
            'lu_status'=>'no_paid',
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
        //TO DO Send To Bank
        dd('send to bank');
    }
}
