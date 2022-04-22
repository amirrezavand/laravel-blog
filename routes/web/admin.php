<?php

use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;


Route::resource('blog', BlogController::class);
Route::get('delete_img/{blog}',[BlogController::class,'deleteImg'])->name('blog.delete_img');
