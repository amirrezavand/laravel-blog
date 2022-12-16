<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\OtpCode;
use Illuminate\Http\Request;

class ForgotPasswordTokenController extends Controller
{
    public function create()
    {
        if (!session()->has('user'))
            return back()->withErrors(['national_code' => 'مشکلی به وجود امده لطفا دوباره تلاش کنید']);

        session()->reflash();
        return view('front.auth.forgot-password-token');
    }

    public function store(Request $request)
    {
        session()->reflash();
        $validData = $request->validate([
            'token' => ['required']
        ]);

        if (!session()->has('user'))
            return back()->withErrors(['national_code' => 'مشکلی به وجود امده لطفا دوباره تلاش کنید']);

        $user = $request->session()->get('user');

        if (!OtpCode::isCodeExist($user, $validData['token']))
            return back()->withErrors(['token' => 'کد وارد شده نادرست است']);

        $user->otpCode()->delete();

        session()->reflash();

        return redirect()->route('new.password');
    }
}
