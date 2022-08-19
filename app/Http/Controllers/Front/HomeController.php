<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        \Illuminate\Support\Facades\Auth::loginUsingId(1);
        return view('front.home.index');
    }
}
