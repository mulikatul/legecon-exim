<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {

        $pages = $this->getPages();
        return response()->view('frontend.sitemap.index', [
            'base_url'                     => url('/'),
            'pages'                     => $pages,
        ])->header('Content-Type', 'text/xml');
    }
    private function getPages()
    {

        return [
            [
                'url' => '/about-us',
                'priority' => '0.7',
                'frequency' => 'Monthly',
            ],
            [
                'url' => '/contact-us',
                'priority' => '0.7',
                'frequency' => 'Monthly',
            ],

            [
                'url' => '/privacy-policy',
                'priority' => '0.7',
                'frequency' => 'Monthly',
            ],
        ];
    }
}
