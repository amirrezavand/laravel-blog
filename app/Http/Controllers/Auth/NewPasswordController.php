<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewPasswordController extends Controller
{
    public function create()
    {
        if (!session()->has('user'))
            return back()->withErrors(['token' => 'مشکلی به وجود امده لطفا دوباره تلاش کنید']);

        session()->reflash();
        return view('front.auth.new-password');
    }

    public function store(Request $request)
    {
        session()->reflash();

        $validData = $request->validate([
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        if (!session()->has('user'))
            return back()->withErrors(['token' => 'مشکلی به وجود امده لطفا دوباره تلاش کنید']);

        $user = $request->session()->get('user');

        $user->update($validData);
        return redirect()->route('login');
    }
}
