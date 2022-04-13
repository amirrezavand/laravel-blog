<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\HomeController;

Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('blogs',[BlogController::class,'index'])->name('blog');
Route::get('blogs/{blog}',[BlogController::class,'single']);
Route::get('contact_us',[ContactUsController::class,'index'])->name('contact_us');
Route::get('about_us',[AboutUsController::class,'aboutUs'])->name('about_us');
Route::get('our_team',[AboutUsController::class,'ourTeam'])->name('our_team');

