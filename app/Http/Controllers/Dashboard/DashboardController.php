<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function myCourses(){
//        dd(auth()->user()->id);
        return view('front.dashboard.my-courses');
    }
    public function myOrder(){
        return view('front.dashboard.my-orders');
    }
}
