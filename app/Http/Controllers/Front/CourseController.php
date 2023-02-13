<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseContent;
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
            $courses=Course::leftJoin('users','users.id','=','courses.user_id')->select(DB::raw('courses.*'),DB::raw('users.name as teacher_name'),DB::raw('users.avatar as teacher_avatar'))->orderby('id','desc')->paginate(12);
        }else {
            $courses=Course::leftJoin('users','users.id','=','courses.user_id')->whereHas('tags', function($q) use ($tag) {
                $q->where('title', '=', $tag);
            })->select(DB::raw('courses.*'),DB::raw('users.name as teacher_name'),DB::raw('users.avatar as teacher_avatar'))->orderby('id','desc')->paginate(12);
        }

        saveSeen('course',0);
        return view('front.course.index',compact('courses'));
    }

    public function single($id){
        $course=Course::with(['user','questions'])->where('id',$id)->firstOrFail();
        $this->seo()->setTitle($course->title);
        $this->seo()->setDescription($course->seo_descriptoin);
        saveSeen('course',$id);
        $course->contents=CourseContent::where('course_id',$id)->orderBy('section','asc')->orderBy('sequence','asc')->get();

        return view('front.course.single',compact('course'));
    }
}
