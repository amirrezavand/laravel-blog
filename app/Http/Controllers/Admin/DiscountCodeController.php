<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DiscountCodeRequest;
use App\Http\Requests\UserRequest;
use App\Models\DiscountCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DiscountCodeController extends Controller
{
    //
    public function index(Request $request){
        $discountCodes=DiscountCode::query()->orderBy('id','desc');

        $keywords=$request->input('keywords');
        if($keywords) {
//            $users=$users->where('name','LIKE','%'.$keywords.'%')
//                ->orWhere('email','LIKE','%'.$keywords.'%')
//                ->paginate(10)->withQueryString();
        }
        else
            $discountCodes=$discountCodes->paginate(10)->withQueryString();

        return view('admin.discount_code.index',compact('discountCodes'));
    }


    public function create()
    {

        $discountCode=new DiscountCode();
        return view('admin.discount_code.create-edit',compact('discountCode'));
    }

    public function store(DiscountCodeRequest $request)
    {
        $validateData=(object) $request->all();
        if(isset($validateData->is_active)) $validateData->is_active=1;
        else $validateData->is_active=0;


        DiscountCode::create((array) $validateData);

        return redirect(route('admin.discount_code.index'));
    }


    public function edit(DiscountCode $discountCode)
    {
        return view('admin.discount_code.create-edit',compact('discountCode'));
    }

    public function update(DiscountCodeRequest $request, DiscountCode $discountCode)
    {
        $validateData=(object) $request->all();
        if(isset($validateData->is_active)) $validateData->is_active=1;
        else $validateData->is_active=0;

        $discountCode->update((array) $validateData);

        return redirect(route('admin.discount_code.index'));
    }

    public function destroy(DiscountCode $discountCode)
    {
        $discountCode->delete();
        return redirect(route('admin.discount_code.index'));
    }
}
