<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
   
// })->name('index');
Route::as('frontend.')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/',  'index')->name('home');
    });
});