<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;


class SitemapXmlController extends Controller
{
    public function index() {
        $courses = Course::all();
        return response()->view('sitemap', [
            'courses' => $courses
        ])->header('Content-Type', 'text/xml');
    }
}

