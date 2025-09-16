<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ClientLogo;
use App\Models\Number;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::status(1)->position('asc')->latest()->get();
        $clients = ClientLogo::status(1)->position('asc')->latest()->get();
        // dd($clients);
        $numbers = Number::get();
        return view('frontend.home',compact('testimonials','clients','numbers'));
    }

    public function aboutUs()
    {
        return view('frontend.about_us');
    }
    public function sitemap()
    {
        return view('frontend.sitemap');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }
}
