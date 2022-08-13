<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MClassRequest;
use App\Http\Requests\UserRequest;
use App\Models\MClass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $classes=MClass::query()->orderBy('id','desc');

        $keywords=$request->input('keywords');
        if($keywords) {
            $classes=$classes->where('name','LIKE','%'.$keywords.'%')
                ->orWhere('email','LIKE','%'.$keywords.'%')
                ->paginate(10)->withQueryString();
        }
        else
            $classes=$classes->paginate(10)->withQueryString();

        return view('admin.class.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class=new MClass();
        return view('admin.class.create-edit',compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MClassRequest $request)
    {
        $validateData=(object) $request->all();

        $validateData->started_at=now();

        $class = MClass::create((array) $validateData);

        return redirect(route('admin.class.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MClass $class)
    {
        return view('admin.class.create-edit',compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MClassRequest $request, MClass $class)
    {
        $validateData=(object) $request->all();

        $class->update((array) $validateData);

        return redirect(route('admin.class.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin.user.index'));
    }
}
