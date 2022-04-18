<?php

use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;


Route::resource('blog', BlogController::class);
