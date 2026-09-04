<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Front\WelcomeController::class,'index'])->name('front.welcome');
Route::get('contact-us', [\App\Http\Controllers\Front\ContactController::class,'index'])->name('front.contact');
Route::post('contact-us', [\App\Http\Controllers\Front\ContactController::class,'send'])->name('front.contact.send');

    Route::get('/about-us', [\App\Http\Controllers\Front\AboutController::class,'index'])->name('front.about');

    Route::get('/our-services', [\App\Http\Controllers\Front\ServicesController::class,'index'])->name('front.services');
    Route::get('/our-products', [\App\Http\Controllers\Front\ProductsController::class,'index'])->name('front.products');

    Route::get('/faq', [\App\Http\Controllers\Front\FaqController::class,'index'])->name('front.faq');
    Route::get('/terms-of-service', [\App\Http\Controllers\Front\TermsController::class,'index'])->name('front.terms');
    Route::get('/privacy-policy', [\App\Http\Controllers\Front\PrivacyController::class,'index'])->name('front.privacy');
    Route::get('/delivery-and-refund-policy', [\App\Http\Controllers\Front\DeliveryController::class,'index'])->name('front.delivery');
