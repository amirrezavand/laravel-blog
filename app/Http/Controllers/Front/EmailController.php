<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    //

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'email|required|max:100',
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=>false,'message'=>'فرمت ایمیل وارده صحیح نمی باشد.']);
        }

        $validated = $validator->validated();
        $email=Email::firstOrCreate(['email'=>$validated['email']]);
        $email->fill(['ip'=>\Illuminate\Support\Facades\Request::ip()])->save();

        return json_encode(['status'=>true,'message'=>'ایمیل با موفقیت ثبت گردید.']);
    }
}
