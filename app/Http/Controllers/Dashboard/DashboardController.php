<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Factor;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function myCourses(){
        $courses=Factor::where('factors.user_id',auth()->user()->id)->where('lu_object_type','Course')->where('is_paid',1)
            ->join('factor_objects','factor_objects.factor_id','factors.id')
            ->join('courses','courses.id','factor_objects.object_id')
            ->select(DB::raw('courses.*'))->get();
        return view('front.dashboard.my-courses',compact('courses'));
    }
    public function myOrders(){
        $factors=Factor::where('user_id',auth()->user()->id)->where('is_paid',1)->get();
        return view('front.dashboard.my-orders',compact('factors'));
    }

}
