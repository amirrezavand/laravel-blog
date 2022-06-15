<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $results=Blog::orderby('id','desc')->paginate(6);
        return view('front.blog.index',compact('results'));
    }

    public function single(){
        return view('front.blog.single');
    }
}
