<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Admin\CourseContentController;
use \App\Http\Controllers\Admin\ContactFormController;
use \App\Http\Controllers\Admin\DiscountCodeController;
use \App\Http\Controllers\Admin\FactorController;
use \App\Http\Controllers\Admin\QuestionController;
use \App\Http\Controllers\Admin\ResumeController;
use \App\Http\Controllers\Admin\CommentController;

Route::middleware(['auth','admin'])->group(function () {
    Route::resource('blog', BlogController::class)->except(['show']);
    Route::get('delete_img/{blog}',[BlogController::class,'deleteImg'])->name('blog.delete_img');

    Route::resource('course', CourseController::class)->except(['show']);
    Route::get('course_img/{course}',[CourseController::class,'deleteImg'])->name('course.delete_img');

    Route::resource('course_content', CourseContentController::class)->except(['show']);

    Route::resource('user', UserController::class)->except(['show']);
    Route::resource('discount_code', DiscountCodeController::class)->except(['show']);

    Route::resource('contact_form',ContactFormController::class)->except(['show']);


    Route::resource('factor',FactorController::class)->except(['show']);
    Route::resource('question',QuestionController::class)->except(['show']);
    Route::resource('resume',ResumeController::class)->except(['show']);
    Route::resource('comment',CommentController::class)->except(['show']);
});




