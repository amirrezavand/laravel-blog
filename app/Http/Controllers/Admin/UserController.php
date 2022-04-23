<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users=User::query()->orderBy('id','desc');

        $keywords=$request->input('keywords');
        if($keywords) {
            $users=$users->where('name','LIKE','%'.$keywords.'%')
                ->orWhere('email','LIKE','%'.$keywords.'%')
                ->paginate(10)->withQueryString();
        }
        else
            $users=$users->paginate(10)->withQueryString();

        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=new User();
        return view('admin.user.create-edit',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $validateData=(object) $request->all();

        $validateData->password=Hash::make($validateData->password);

        $user = User::create((array) $validateData);


        if($request->has('is_verify_email'))
            $user->markEmailAsVerified();


        return redirect(route('admin.user.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.create-edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $validateData=(object) $request->all();
        if(!$request->has('is_staff')) $validateData->is_staff='0';
        if(!$request->has('is_admin')) $validateData->is_admin='0';

        if(is_null($validateData->password))
            unset($validateData->password);
        else
            $validateData->password=Hash::make($validateData->password);

        $user->update((array) $validateData);

        if($request->has('is_verify_email')) {
            $user->markEmailAsVerified();
        }

        return redirect(route('admin.user.index'));
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
