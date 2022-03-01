<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUS()
    {
        return view('front.about-us.about-us');
    }

    public function ourTeam()
    {
        return view('front.about-us.our-team');
    }
}
