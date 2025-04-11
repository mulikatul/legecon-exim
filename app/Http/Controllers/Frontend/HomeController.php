<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
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
