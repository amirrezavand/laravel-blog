<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BlogController;



Route::get('blogs',[BlogController::class,'index']);

