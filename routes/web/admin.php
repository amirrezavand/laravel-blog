<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('blog', BlogController::class)->except(['show']);
Route::get('delete_img/{blog}',[BlogController::class,'deleteImg'])->name('blog.delete_img');

Route::resource('user', UserController::class)->except(['show']);
