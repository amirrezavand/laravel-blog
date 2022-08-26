<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $results=Blog::leftJoin('users','users.id','=','blogs.user_id')->select(DB::raw('blogs.*'),DB::raw('users.name as author_name'),DB::raw('users.avatar as author_avatar'))->orderby('id','desc')->paginate(6);
        return view('front.blog.index',compact('results'));
    }

    public function single($id){
        $blog=Blog::leftJoin('users','users.id','=','blogs.user_id')->select(DB::raw('blogs.*'),DB::raw('users.name as author_name'),DB::raw('users.avatar as author_avatar'))->where('blogs.id',$id)->first();
        return view('front.blog.single',compact('blog'));
    }
}
