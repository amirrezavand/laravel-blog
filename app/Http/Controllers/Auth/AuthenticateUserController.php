<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Email;
use App\Models\User;
use App\Rules\CaptchaValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthenticateUserController extends Controller
{
    public function create(Request $request)
    {
        $this->seo()
            ->setTitle("ورود")
            ->setDescription("در این صفحه می توانید وارد سامانه رویداد ملی اقدام شوید.");
        return view('front.auth.login');
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'phone_number' => ['required'],
            'password' => ['required', 'min:8', 'max:100'],
            'captcha' => ['required', new CaptchaValidation]
        ]);

        $user = User::where('phone_number', $validData['phone_number'])->first();
        if (is_null($user)) {
            return back()->withErrors(['password' => 'اطلاعات وارده اشتباه است']);
        }

        if (!Hash::check($validData['password'], $user->password)) {
            return back()->withErrors(['password' => 'رمز عبور اشتباه است']);
        }

        auth()->login($user, true);

        return redirect()->route('home');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function verifyPhone(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_number' => ['required', 'regex:/(\\+98|0)?9\\d{9}$/'],
            'captcha' => ['required', new CaptchaValidation]]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'اطلاعات وارده صحیح نمی باشد.']);
        }

        $validData = $validator->validated();


        $validData['phone_number'] = preg_replace('/^(\\+98|0)/', '', $validData['phone_number']);

        if (User::where('phone_number', $validData['phone_number'])->get()->count() > 0)
            return response()->json(['status' => false, 'message' => 'شماره مورد نظر حساب کاربری دارد.']);


        //TODO otp code must change
        $otpCode = 666666;
        $request->session()->put('phone_verify', false);
        $request->session()->put('phone_number', $validData['phone_number']);
        $request->session()->put('otp_code', $otpCode);
        //TODO sendOtp($validData['phone_number'],$otpCode);

        return response()->json(['status' => true, 'message' => 'کد ورود ارسال گردید.']);
    }

    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otp_code' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'کد وارده صحیح نمی باشد لطفا مجدد تلاش نمایید.']);
        }

        $validData = $validator->validated();


        if ($request->session()->get('otp_code') == $validData['otp_code']) {

            $request->session()->put('phone_verify', true);
            return response()->json(['status' => true, 'message' => 'کد ورود صحیح می باشد.']);
        } else {
            return response()->json(['status' => false, 'message' => 'کد وارده صحیح نمی باشد لطفا مجدد تلاش نمایید.']);
        }
    }

}
