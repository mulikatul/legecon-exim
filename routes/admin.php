<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientLogoController;
use App\Http\Controllers\Admin\CmsUserController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TestimonialController;

Route::prefix('admin')->as('admin.')->group(function () {

    // Admin Auth Routes start
    Route::middleware('guest:admin')->group(function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('/login',  'showLogin')->name('login');
            Route::Post('/login',  'login')->name('login.submit');
        });

        Route::controller(PasswordController::class)->group(function (){
            Route::get('forgot-password', 'showForgotPasswordForm')->name('forgot.password.get');
            Route::post('forgot-password','sendPasswordResetToken')->name('forget.password.post'); 
            Route::get('reset-password/{token}', 'showPasswordResetForm')->name('reset.password.get');
            Route::post('reset-password','resetPassword')->name('reset.password.post');
        });
    });
    // Admin Auth Routes end

    Route::middleware(['auth:admin','isActive'])->group(function () {
        //Route::middleware(['admin_auth', 'auth:admin'])->group(function() {
        Route::post('/logout',[LoginController::class,'logout'])->name('logout');
        Route::controller(AdminDashboardController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
        });
        //contact us
        Route::resource('/contact-us', ContactUsController::class);


        //Testimonials
        Route::resource('testimonials',TestimonialController::class);
        Route::post('testimonials/update-order', [TestimonialController::class,'updateOrder']);

        // //CMS Users
        // Route::resource('cms-users',CmsUserController::class);

        // //Roles
        // Route::resource('roles',RoleController::class);

        // //permission
        // Route::resource('permissions',PermissionController::class);

    });
});
