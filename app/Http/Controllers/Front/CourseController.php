<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(){
        $courses=Course::leftJoin('users','users.id','=','courses.user_id')->select(DB::raw('courses.*'),DB::raw('users.name as teacher_name'),DB::raw('users.avatar as teacher_avatar'))->orderby('id','desc')->paginate(6);
        return view('front.course.index',compact('courses'));
    }

    public function single($id){

        $course=Course::with('user')->first();
        $course->contents=CourseContent::where('course_id',$id)->orderBy('section','asc')->orderBy('sequence','asc')->get();

        return view('front.course.single',compact('course'));
    }
}
