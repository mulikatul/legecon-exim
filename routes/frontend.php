<?php

use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SitemapController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
   
// })->name('index');
Route::as('frontend.')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/',  'index')->name('home');
        Route::get('/about-us',  'aboutUs')->name('about-us');
        Route::get('/sitemap',  'sitemap')->name('sitemap');
        Route::get('/privacy-policy',  'privacyPolicy')->name('privacy-policy');
    });
     //sitemap 
     Route::controller(SitemapController::class)->group(function () {
        Route::get('/sitemap.xml', 'index')->name('frontend.sitemap.xml');
    });
    Route::controller(ContactUsController::class)->group(function () {
        Route::get('/contact-us',  'index')->name('contact-us');
        Route::post('/store/contact-us',  'storeContactUs')->name('store-contact-us');
    });
});