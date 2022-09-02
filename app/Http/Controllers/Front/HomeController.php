<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        \Illuminate\Support\Facades\Auth::loginUsingId(1);
        $blogs=Blog::leftJoin('users','users.id','=','blogs.user_id')->select(DB::raw('blogs.*'),DB::raw('users.name as author_name'),DB::raw('users.avatar as author_avatar'))->orderby('id','desc')->limit(3)->get();
        return view('front.home.index',compact('blogs'));
    }
}
