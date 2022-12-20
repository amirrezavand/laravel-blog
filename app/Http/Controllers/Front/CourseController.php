<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseContent;
use App\Models\Factor;
use App\Models\Seen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;


class CourseController extends Controller
{
    use SEOToolsTrait;
    public function index(){
        $this->seo()->setTitle('دوره ها');
        $this->seo()->setDescription('آموزش نرم افزار GIS و Google Earth ( گوگل ارث) و سایر نرم افزارهای نقشه برداری را توسط برترین مدرسین ایران ...');
        $courses=Course::leftJoin('users','users.id','=','courses.user_id')->select(DB::raw('courses.*'),DB::raw('users.name as teacher_name'),DB::raw('users.avatar as teacher_avatar'))->orderby('id','desc')->paginate(6);
        saveSeen('course',0);
//        dd(Seen::where('object_type','course')->where('object_id',$courses->pluck('id'))->get());
        return view('front.course.index',compact('courses'));
    }

    public function single($id){

        $course=Course::with('user')->where('id',$id)->firstOrFail();
        saveSeen('course',$id);
        $course->contents=CourseContent::where('course_id',$id)->orderBy('section','asc')->orderBy('sequence','asc')->get();
        return view('front.course.single',compact('course'));
    }
}
