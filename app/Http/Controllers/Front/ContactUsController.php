<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ContactUsController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        $this->seo()->setTitle('تماس با ما');
        $this->seo()->setDescription('در صورت وجود هر گونه ابهام و سوال توسط راه های ارتباطی زیر با ما در ارتباط باشید.');

        return view('front.contact-us.contact-us');
    }
}
