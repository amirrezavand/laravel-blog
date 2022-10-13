<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\CourseContentController;


Route::resource('blog', BlogController::class)->except(['show']);
Route::get('delete_img/{blog}',[BlogController::class,'deleteImg'])->name('blog.delete_img');

Route::resource('course', CourseController::class)->except(['show']);
Route::get('course_img/{course}',[CourseController::class,'deleteImg'])->name('course.delete_img');

Route::resource('course_content', CourseContentController::class)->except(['show']);

Route::resource('user', UserController::class)->except(['show']);


