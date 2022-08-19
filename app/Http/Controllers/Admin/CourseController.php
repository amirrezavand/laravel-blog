<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
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

        return view('admin.blog.create-edit',compact('course','contentStatuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $validateData=(object) $request->all();

        //upload image
        $img=$request->file('img');
        if(is_null($img)) {
            unset($validateData->img);
        } else {
            $name = 'blog/' . time() . Str::random(5) . '.' . $img->getClientOriginalExtension();
            Storage::disk("upload")->put($name,file_get_contents($img));
            $validateData->img=Storage::disk('upload')->url($name);
        }
        //end upload image

        auth()->user()->blogs()->create((array) $validateData);
        return redirect(route('admin.blog.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $contentStatuses=Lookup::where('group_key','content_status')->get();

        return view('admin.blog.create-edit',compact('blog','contentStatuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $validateData=(object) $request->all();

        //upload image
        $img=$request->file('img');
        if(is_null($img)) {
            unset($validateData->img);
        } else {
            $name = '/blog/' . time() . Str::random(5) . '.' . $img->getClientOriginalExtension();
            Storage::disk("upload")->put($name,file_get_contents($img));
            $validateData->img=Storage::disk('upload')->url($name);
        }
        //end upload image

        $blog->update((array) $validateData);
        return redirect(route('admin.blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }

    public function deleteImg(Blog $blog){
        $blog->update([
            'img'=>null
        ]);
        return back();
    }
}
