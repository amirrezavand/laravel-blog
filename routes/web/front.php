<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Http\Request;


Route::get('/test1',function (){
    dd(Hash::make('amirreza90060',[
        'memory' => 1024,
        'time' => 2,
        'threads' => 2,
    ]));
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


Route::post('/register',[\App\Http\Controllers\Front\AuthController::class,'register'])->name('auth.register');




Route::get('signup',function (){
    return view('front.auth.signup');
})->name('signup');

Route::get('/dashboard',function (){
    return view('dashboard.home.index');
})->name('dashboard');






Route::get('/captcha', function (Request $request) {
    // $request->session()->get('any-key')
    // Generate captcha code
    $random_num = md5(random_bytes(64));
    $captcha_code = substr($random_num, 0, 6);

    // Assign captcha in session
    // $_SESSION['CAPTCHA_CODE'] = $captcha_code;
    $request->session()->put('CAPTCHA_CODE', $captcha_code);
    $request->session()->save();
    // Create captcha image
    $layer = imagecreatetruecolor(168, 37);
    $captcha_bg = imagecolorallocate($layer, 247, 174, 71);
    imagefill($layer, 0, 0, $captcha_bg);
    $captcha_text_color = imagecolorallocate($layer, 0, 0, 0);
    imagestring($layer, 5, 55, 10, $captcha_code, $captcha_text_color);
    header("Content-type: image/jpeg");
    imagejpeg($layer);
});


// forgot password
Route::middleware('guest')->group(function () {
    Route::get('/register', [\App\Http\Controllers\Auth\RegistereUserController::class, 'create'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Auth\RegistereUserController::class, 'store']);

    Route::get('/login', [\App\Http\Controllers\Auth\AuthenticateUserController::class, 'create'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\AuthenticateUserController::class, 'store']);

    Route::post('/verify_phone', [\App\Http\Controllers\Auth\AuthenticateUserController::class, 'verifyPhone'])->name('verify_phone');
    Route::post('/verify_otp', [\App\Http\Controllers\Auth\AuthenticateUserController::class, 'verifyOtp'])->name('verify_otp');

    Route::get('/forgot_password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'create'])->name('forgot.password');
    Route::post('/forgot_password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'store']);

    Route::get('/forgot_password/token', [\App\Http\Controllers\Auth\ForgotPasswordTokenController::class, 'create'])->name('forgot.password.token');
    Route::post('/forgot_password/token', [\App\Http\Controllers\Auth\ForgotPasswordTokenController::class, 'store']);

    Route::get('/new_password', [\App\Http\Controllers\Auth\NewPasswordController::class, 'create'])->name('new.password');
    Route::put('/new_password', [\App\Http\Controllers\Auth\NewPasswordController::class, 'store']);

});

Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticateUserController::class, 'logout'])->middleware('auth')->name('logout');






Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('my_course',[\App\Http\Controllers\Dashboard\DashboardController::class,'myCourses'])->name('my_courses');
    Route::get('my_order',[\App\Http\Controllers\Dashboard\DashboardController::class,'myOrders'])->name('my_orders');
    Route::get('buy/course/{id}',[\App\Http\Controllers\Dashboard\BuyController::class,'registerCourseFactorAndSendBank'])->name('buy.course');
    Route::get('is_paid',[\App\Http\Controllers\Dashboard\BuyController::class,'checkIsPaid'])->name('buy.check_paid');
});




Route::get('/test5',function (){

});
