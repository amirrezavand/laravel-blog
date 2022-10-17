<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\OtpCode;
use App\Models\User;
use App\Rules\CaptchaValidation;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function create()
    {
        $this->seo()
            ->setTitle("فراموشی رمز عبور")
            ->setDescription("در این صفحه می توانید رمز عبور خود را بازیابی کنید.");
        return view('front.auth.forgot-password');
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'national_code' => ['required', 'exists:users,national_code'],
            'phone_number' => ['required', 'regex:/(\\+98|0)?9\\d{9}$/', 'exists:users,phone_number'],
            'captcha' => ['required', new CaptchaValidation]
        ]);

        $user = User::where('national_code', $validData['national_code'])->where('phone_number', $validData['phone_number'])->first();

        if (!$user) $user = User::create($validData);

        $otp = OtpCode::generateCode($user);

        sendOtp($user->phone_number, $otp);

        $request->session()->flash('user', $user);

        return redirect()->route('forgot.password.token');
    }
}
