<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactUsController;


Route::get('blogs',[BlogController::class,'index']);
Route::get('blogs/{blog}',[BlogController::class,'single']);
Route::get('contact_us',[ContactUsController::class,'index']);
//Route::get('about_us')
//Route::get('our_team')
