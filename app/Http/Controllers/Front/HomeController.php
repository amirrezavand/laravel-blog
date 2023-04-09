<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class HomeController extends Controller
{
    use SEOToolsTrait;
    public function index(Request $request)
    {
        $this->seo()->setTitle('صفحه اصلی');
        $this->seo()->setDescription('حرفه ای ترین آموزش های نرم افزار GIS ، Google Earth، نقشه برداری با کافه جی آی اس.');

        $courses=Course::leftJoin('users','users.id','=','courses.user_id')->where('courses.lu_content_status','publish')->select(DB::raw('courses.*'),DB::raw('users.name as teacher_name'),DB::raw('users.avatar as teacher_avatar'))->orderby('id','asc')->limit(6)->get();
        $blogs=Blog::leftJoin('users','users.id','=','blogs.user_id')->select(DB::raw('blogs.*'),DB::raw('users.name as author_name'),DB::raw('users.avatar as author_avatar'))->orderby('id','desc')->limit(3)->get();
        return view('front.home.index',compact('blogs','courses'));
    }
}
