<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class FaqController extends Controller
{
    use SEOToolsTrait;
    public function faq(){
        $this->seo()->setTitle('سوالات متداول');
        $this->seo()->setDescription('سوالات متداول درمورد خرید و استفاده از دوره های سایت کافه جی آی اس را از اینجا بیابید.');

        saveSeen('faq',0);
        return view('front.faq.index');
    }
}
