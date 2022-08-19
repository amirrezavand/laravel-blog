<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\CourseRequest;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Lookup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $courses=Course::query()->with('user')->orderBy('id','desc');

        $keywords=$request->input('keywords');
        if($keywords) {
            $courses=$courses->whereHas('user', function ($query) use ($keywords){
                $query->where('name', 'like', '%'.$keywords.'%');
            })->orWhere('title','LIKE','%'.$keywords.'%')->paginate(10)->withQueryString();
        }
        else
            $courses=$courses->paginate(10)->withQueryString();

        return view('admin.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course=new Course();
        $contentStatuses=Lookup::where('group_key','content_status')->get();

        return view('admin.course.create-edit',compact('course','contentStatuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $validateData=(object) $request->all();


        //upload image
        $img=$request->file('img');
        if(is_null($img)) {
            unset($validateData->img);
        } else {
            $name = 'course/' . time() . Str::random(5) . '.' . $img->getClientOriginalExtension();
            Storage::disk("upload")->put($name,file_get_contents($img));
            $validateData->img=Storage::disk('upload')->url($name);
        }
        //end upload image

        auth()->user()->courses()->create((array) $validateData);
        return redirect(route('admin.course.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $contentStatuses=Lookup::where('group_key','content_status')->get();

        return view('admin.course.create-edit',compact('course','contentStatuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, Course $course)
    {
        $validateData=(object) $request->all();

        //upload image
        $img=$request->file('img');
        if(is_null($img)) {
            unset($validateData->img);
        } else {
            $name = '/course/' . time() . Str::random(5) . '.' . $img->getClientOriginalExtension();
            Storage::disk("upload")->put($name,file_get_contents($img));
            $validateData->img=Storage::disk('upload')->url($name);
        }
        //end upload image

        $course->update((array) $validateData);
        return redirect(route('admin.course.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return back();
    }

    public function deleteImg(Course $course){
        $course->update([
            'img'=>null
        ]);
        return back();
    }

}
