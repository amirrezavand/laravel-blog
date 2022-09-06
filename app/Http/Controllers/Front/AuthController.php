<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'password' => 'required|min:8|max:255',
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=>false,'message'=>'فرمت اطلاعاتی ارسالی به سرور صحیح نمی باشد.']);
        }

        $validatedData = $validator->validated();


        $user = new User();
        $user->password = Hash::make($validatedData['password']);
        $user->email = $validatedData['email'];
        $user->name = $validatedData['name'];
        $user->save();
        Auth::loginUsingId($user->id);


        return json_encode(['status'=>true,'message'=>'با موفقیت در سایت ثبت نام شدید.']);
    }
}
