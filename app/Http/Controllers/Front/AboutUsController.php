<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class AboutUsController extends Controller
{
    use SEOToolsTrait;
    public function aboutUS()
    {
        $this->seo()->setTitle('درباره ما');
        $this->seo()->setDescription('در کافه جی آی اس سعی شده است جدیدترین متدها در راستای با کیفیت نمودن پروسه یادگیری، به کار گرفته شود و همواره در تلاش هستیم به روز ترین آموزش ها را در راستای ارتقای شما در سایت قرار دهیم.');

        return view('front.about-us.about-us');
    }

    public function ourTeam()
    {
        return view('front.about-us.our-team');
    }
}
