<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/test',function (){
    dd(auth()->user());
});

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/courses',[\App\Http\Controllers\Front\CourseController::class,'index'])->name('course');
Route::get('/courses/{id}',[\App\Http\Controllers\Front\CourseController::class,'single'])->name('course.single');


Route::get('/blogs',[BlogController::class,'index'])->name('blog');
Route::get('/blogs/{blog}',[BlogController::class,'single'])->name('blog.single');
Route::get('/contact_us',[ContactUsController::class,'index'])->name('contact_us');
Route::get('/about_us',[AboutUsController::class,'aboutUs'])->name('about_us');
Route::get('/our_team',[AboutUsController::class,'ourTeam'])->name('our_team');

Route::post('/email',[\App\Http\Controllers\Front\EmailController::class,'store'])->name('email.store');
Route::post('/contact_us',[\App\Http\Controllers\Front\ContactFormController::class,'contactUs'])->name('contact_us.store');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');


Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');
Route::get('login',function (){
    return view('front.auth.login');
})->middleware('guest')->name('login');


Route::get('logout',function (){
    auth()->logout();
    return redirect(route('home'));
})->middleware('auth')->name('logout');





Route::get('signup',function (){
    return view('front.auth.signup');
})->name('signup');

Route::get('/dashboard',function (){
    return view('dashboard.home.index');
})->name('dashboard');
