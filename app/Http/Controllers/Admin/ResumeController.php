<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResumeRequest;
use App\Models\Question;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resumes=Resume::query()->orderBy('id','desc')->leftJoin('users','resumes.user_id','users.id')->select('resumes.*','users.name');

        $keywords=$request->input('keywords');
        if($keywords) {
//            $questions=$questions->whereHas('user', function ($query) use ($keywords){
//                $query->where('name', 'like', '%'.$keywords.'%');
//            })->orWhere('title','LIKE','%'.$keywords.'%')->paginate(10)->withQueryString();
        }
        else
            $resumes=$resumes->paginate(10)->withQueryString();

        return view('admin.resume.index',compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resume=new Resume();
        $users=User::where('is_staff',1)->get();

        return view('admin.resume.create-edit',compact('resume','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResumeRequest $request)
    {
        $validatedData=$request->validated();
        Resume::create($validatedData);

        return redirect(route('admin.resume.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        $users=User::where('is_staff',1)->get();

        return view('admin.resume.create-edit',compact('resume','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ResumeRequest $request, Resume $resume)
    {
        $validateData= $request->all();

        $resume->update($validateData);
        return redirect(route('admin.resume.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
