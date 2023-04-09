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
    public function index(Request $request){
        $tag='';
        $title='بلاگ';
        $description='آخرین و بروزترین مقالات در حوزه GIS، نقشه برداری و زمین شناسی را از اینجا بیابید.';
        if(in_array('arcgis_pro',$request->input('tag')??[]) && in_array('free',$request->input('tag')??[]) ){
            $tag='arcgis_pro';
            $title='آموزش رایگان ArcGIS Pro';
            $description='در آموزش رایگان آرک جی آی اس پرو سعی شده است تا تمامی نکات لازم برای کار با این نرم افزار به صورت کاملا رایگان و کاربردی( با تدریس امیر حمیدی) گفته شود.';
        }
        else if(in_array('arcgis',$request->input('tag')??[]) && in_array('free',$request->input('tag')??[])) {
            $tag='arcgis';
            $title='آموزش رایگان ArcGIS';
            $description='در آموزش رایگان آرک جی آی اس سعی شده است تا تمامی نکات لازم برای کار با این نرم افزار به صورت کاملا رایگان و کاربردی( با تدریس امیر حمیدی) گفته شود.';
        }
        else if(in_array('qgis',$request->input('tag')??[]) && in_array('free',$request->input('tag')??[])){
            $tag='qgis';
            $title='آموزش رایگان QGIS';
            $description='در آموزش رایگان کیو جی آی اس سعی شده است تا تمامی نکات لازم برای کار با این نرم افزار به صورت کاملا رایگان و کاربردی( با تدریس امیر حمیدی) گفته شود.';
        }
        else if(in_array('global_mapper',$request->input('tag')??[]) && in_array('free',$request->input('tag')??[])) {
            $tag='global_mapper';
            $title='آموزش رایگان گلوبال مپر';
            $description='در آموزش گلوبال مپر سعی شده است تا تمامی نکات لازم برای کار با این نرم افزار به صورت کاملا رایگان و کاربردی( با تدریس امیر حمیدی) گفته شود.';
        }
        else if(in_array('surfer',$request->input('tag')??[]) && in_array('free',$request->input('tag')??[])) {
            $tag='surfer';
            $title='آموزش رایگان نرم افزار Surfer';
            $description='در آموزش رایگان Surfer سعی شده است تا تمامی نکات لازم برای کار با این نرم افزار به صورت کاملا رایگان و کاربردی( با تدریس امیر حمیدی) گفته شود.';
        }
        else if(in_array('civil_3d',$request->input('tag')??[]) && in_array('free',$request->input('tag')??[])){
            $tag='civil_3d';
            $title='آموزش رایگان Civil 3D';
            $description='در آموزش رایگان Civil 3D سعی شده است تا تمامی نکات لازم برای کار با این نرم افزار به صورت کاملا رایگان و کاربردی( با تدریس امیر حمیدی) گفته شود.';
        }
        else if(in_array('autocad',$request->input('tag')??[]) && in_array('free',$request->input('tag')??[])){
            $tag='autocad';
            $title='آموزش رایگان AutoCAD';
            $description='در آموزش رایگان AutoCAD سعی شده است تا تمامی نکات لازم برای کار با این نرم افزار به صورت کاملا رایگان و کاربردی( با تدریس امیر حمیدی) گفته شود.';
        }
        else if(in_array('rs',$request->input('tag')??[]) && in_array('free',$request->input('tag')??[])){
            $tag='rs';
            $title='آموزش رایگان سنجش از دور';
            $description='در آموزش رایگان سنجش از دور سعی شده است تا تمامی نکات لازم برای کار با این نرم افزار به صورت کاملا رایگان و کاربردی( با تدریس امیر حمیدی) گفته شود.';
        }

        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        saveSeen('blog',0);

        if($title=='بلاگ'){
            $results=Blog::leftJoin('users','users.id','=','blogs.user_id')->select(DB::raw('blogs.*'),DB::raw('users.name as author_name'),DB::raw('users.avatar as author_avatar'))->orderby('id','desc')->paginate(6);
            return view('front.blog.index',compact('results','title'));
        }


        $results=Blog::leftJoin('users','users.id','=','blogs.user_id')->whereHas('tags', function($q) use ($tag) {
            $q->where('title', '=', $tag);
        })->select(DB::raw('blogs.*'),DB::raw('users.name as author_name'),DB::raw('users.avatar as author_avatar'))->orderby('id','desc')->paginate(6);

        return view('front.blog.index',compact('results','title'));
    }

    public function single($id){
        $blog=Blog::leftJoin('users','users.id','=','blogs.user_id')->select(DB::raw('blogs.*'),DB::raw('users.name as author_name'),DB::raw('users.avatar as author_avatar'))->where('blogs.id',$id)->firstOrFail();
        $this->seo()->setTitle($blog->title);
        $this->seo()->setDescription($blog->short_description);

        saveSeen('blog',$id);
        return view('front.blog.single',compact('blog'));
    }
}
