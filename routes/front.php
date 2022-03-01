<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\AboutUsController;

Route::get('blogs',[BlogController::class,'index']);
Route::get('blogs/{blog}',[BlogController::class,'single']);
Route::get('contact_us',[ContactUsController::class,'index']);
Route::get('about_us',[AboutUsController::class,'aboutUs']);
Route::get('our_team',[AboutUsController::class,'ourTeam']);
