<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseContent;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class CourseController extends Controller
{
    use SEOToolsTrait;
    public function index(Request $request){
        $this->seo()->setTitle('دوره ها');
        $this->seo()->setDescription('آموزش نرم افزار GIS و Google Earth ( گوگل ارث) و سایر نرم افزارهای نقشه برداری را توسط برترین مدرسین ایران ...');

        $tag=$request->input('tag');

        if(is_null($tag)){
            $courses=Course::leftJoin('users','users.id','=','courses.user_id')->where('courses.lu_content_status','publish')->select(DB::raw('courses.*'),DB::raw('users.name as teacher_name'),DB::raw('users.avatar as teacher_avatar'))->orderby('id','desc')->paginate(12);
        }else {
            $courses=Course::leftJoin('users','users.id','=','courses.user_id')->where('courses.lu_content_status','publish')->whereHas('tags', function($q) use ($tag) {
                $q->where('title', '=', $tag);
            })->select(DB::raw('courses.*'),DB::raw('users.name as teacher_name'),DB::raw('users.avatar as teacher_avatar'))->orderby('id','desc')->paginate(12);
        }

        saveSeen('course',0);
        return view('front.course.index',compact('courses'));
    }

    public function single($id){
        $course=Course::with(['user','questions'])->where('id',$id)->firstOrFail();

        if($course->lu_content_status!='publish') return abort(404);

        $this->seo()->setTitle($course->title);
        $this->seo()->setDescription($course->seo_descriptoin);
        saveSeen('course',$id);
        $course->contents=CourseContent::where('course_id',$id)->orderBy('section','asc')->orderBy('sequence','asc')->get();

        $resume=Resume::where('user_id',$course->user_id)->first();

        $comments=Comment::where('model','Course')->where('object_id',$course->id)->where('is_verified',1)->
        leftJoin('users','users.id','comments.user_id')->select(DB::raw('comments.*'),'users.name')->get();

        return view('front.course.single',compact('course','resume','comments'));
    }
}
