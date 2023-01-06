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

Route::get('/', function () {
    return view('welcome');
});
    Route::get('contact-us', [\App\Http\Controllers\Front\ContactController::class,'index'])->name('front.contact');

    Route::get('/home', [\App\Http\Controllers\Front\WelcomeController::class,'index'])->name('front.welcome');

    Route::get('/about-us', [\App\Http\Controllers\Front\AboutController::class,'index'])->name('front.about');

    Route::get('/our-services', [\App\Http\Controllers\Front\ServicesController::class,'index'])->name('front.services');

    Route::get('/our-blog', [\App\Http\Controllers\Front\BlogController::class,'index'])->name('front.blog');

    Route::get('/case-study', [\App\Http\Controllers\Front\CaseController::class,'index'])->name('front.case_study');
