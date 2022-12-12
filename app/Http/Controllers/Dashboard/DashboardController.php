<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Factor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function myCourses(){
//        dd(auth()->user()->id);
        return view('front.dashboard.my-courses');
    }
    public function myOrders(){
        $factors=Factor::where('user_id',auth()->user()->id)->where('is_paid',1)->get();
        return view('front.dashboard.my-orders',compact('factors'));
    }

}
