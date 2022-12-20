<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class BlogController extends Controller
{
    use SEOToolsTrait;
    public function index(){
        $this->seo()->setTitle('بلاگ');
        $this->seo()->setDescription('آخرین و بروزترین مقالات در حوزه GIS، نقشه برداری و زمین شناسی را از اینجا بیابید.');
        $results=Blog::leftJoin('users','users.id','=','blogs.user_id')->select(DB::raw('blogs.*'),DB::raw('users.name as author_name'),DB::raw('users.avatar as author_avatar'))->orderby('id','desc')->paginate(6);
        saveSeen('blog',0);
        return view('front.blog.index',compact('results'));
    }

    public function single($id){
        $blog=Blog::leftJoin('users','users.id','=','blogs.user_id')->select(DB::raw('blogs.*'),DB::raw('users.name as author_name'),DB::raw('users.avatar as author_avatar'))->where('blogs.id',$id)->firstOrFail();
        $this->seo()->setTitle($blog->title);
        $this->seo()->setDescription($blog->short_description);

        saveSeen('blog',$id);
        return view('front.blog.single',compact('blog'));
    }
}
