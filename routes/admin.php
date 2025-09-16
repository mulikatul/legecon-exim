<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientLogoController;
use App\Http\Controllers\Admin\CmsUserController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubCategoryController;
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

        //Category
        Route::resource('category',CategoryController::class);

        //Sub Category
        Route::resource('sub-category',SubCategoryController::class);

        //Products
        Route::resource('products',ProductController::class);
        Route::controller(ProductController::class)->group(function () {
            Route::post('product/store-gallery', 'storeGallery')->name('store-gallery');
            Route::Post('product/remove-file', 'removeFile')->name('remove-file');
            Route::get('product/get-sub-category', 'getSubCategory')->name('get-sub-category');
            Route::post('product/update-order', 'updateGalleryOrder')->name('gallery-order-update');
            Route::get('product/edit-gallery/{id}','mediaEdit')->name('edit-gallery');
            Route::get('product/get-gallery/{id}','getGallery')->name('get-gallery');
            Route::post('product/update-gallery','mediaUpdate')->name('update-gallery');
            Route::post('product/gallery-delete','deleteGallery')->name('delete-gallery');
        });

        //Client Logo
        Route::resource('client-logo',ClientLogoController::class);
        Route::post('client-logo/update-order', [ClientLogoController::class,'updateOrder']);

        //Numbers
        Route::resource('numbers',NumberController::class);

        // //CMS Users
        // Route::resource('cms-users',CmsUserController::class);

        // //Roles
        // Route::resource('roles',RoleController::class);

        // //permission
        // Route::resource('permissions',PermissionController::class);

    });
});
