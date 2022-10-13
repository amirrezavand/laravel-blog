<?php

namespace App\Http\Controllers\Auth;

//use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
//use App\Models\Lookup;
use App\Models\User;
use App\Models\UserCity;
//use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
use Morilog\Jalali\CalendarUtils;

class RegistereUserController extends Controller
{
    public function create(Request $request)
    {
        $this->seo()
            ->setTitle("ثبت نام")
            ->setDescription("در این صفحه می توانید در سامانه رویداد ملی اقدام ثبت نام کنید.");
        $is_verify_phone=$request->session()->get('phone_verify');
        $phone_number=$request->session()->get('phone_number');
        return view('front.auth.register', compact('is_verify_phone','phone_number'));
    }

    public function store(Request $request,UserRequest $userRequest)
    {
        $validData = $userRequest->validated();
        $user = User::create([
            'name' => $validData['first_name'].' '.$validData['last_name'],
            'password' => $validData['password'],
            'phone_number'=>$request->session()->get('phone_number')
        ]);

        auth()->login($user, true);


        return json_encode(['status'=>true,'message'=>'با موفقیت در سایت ثبت نام شدید.']);
    }

}
