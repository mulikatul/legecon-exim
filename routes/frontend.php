<?php

use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
   
// })->name('index');
Route::as('frontend.')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/',  'index')->name('home');
        Route::get('/about-us',  'aboutUs')->name('about-us');
    });
    Route::controller(ContactUsController::class)->group(function () {
        Route::get('/contact-us',  'index')->name('contact-us');
        Route::post('/store/contact-us',  'storeContactUs')->name('store-contact-us');
    });
});