<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseContent;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $courseId=$request->input('course_id');
        $courseContents=CourseContent::where('course_id',$courseId)->orderBy('section','asc')->orderBy('sequence','asc')->get()->toArray();
        return json_encode(['status'=>true,'data'=>['courseContents'=>$courseContents]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id'=>'required|numeric',
            'title' => 'required|max:255|min:3',
            'url' => 'required|max:255',
            'time' => 'nullable|numeric|min:2',
            'sequence'=>'required|numeric',
            'section'=>'required|numeric',
            'is_main'=>'required|numeric',
            'is_free'=>'required|numeric'
        ]);

       if ($validator->fails()) {
            return json_encode(['status'=>false,'message'=>'فرمت اطلاعات وارده صحیح نمی باشد.']);
        }

        $validated = $validator->validated();

        CourseContent::create($validated);

        return json_encode(['status'=>true,'message'=>'اطلاعات با موفقیت ثبت گردید.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseContent $courseContent)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|min:3',
            'url' => 'required|max:255',
            'time' => 'nullable|numeric|min:0',
            'sequence'=>'required|numeric',
            'section'=>'required|numeric',
            'is_main'=>'required|numeric',
            'is_free'=>'required|numeric'
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=>false,'message'=>'فرمت اطلاعات وارده صحیح نمی باشد.']);
        }

        $validated = $validator->validated();
        $courseContent->update($validated);

        return json_encode(['status'=>true,'message'=>'اطلاعات با موفقیت ویرایش گردید.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseContent $courseContent)
    {
        $courseContent->delete();
        return json_encode(['status'=>true,'message'=>'اطلاعات با موفقیت حذف گردید.']);
    }
}
