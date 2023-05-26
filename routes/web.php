<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\GeneralController;
use App\Http\Controllers\Auth\Customer\AuthController;
use App\Http\Controllers\Front\BlogController;

Route::group(['prefix' => 'admin'], function () { Voyager::routes(); });

Route::get('/', function (){ return redirect(app()->getLocale()); });

Route::prefix('{locale}')->where(['locale' => '[a-zA]{2}'])->middleware('setLocale')->group(function (){
    Route::get('/', [GeneralController::class, 'index'])->name('index');
    Route::get('/about_us', [GeneralController::class, 'aboutUs'])->name('aboutUs');
    Route::get('/publications', [GeneralController::class, 'publications'])->name('publications');
    Route::get('/blog', [GeneralController::class, 'blog'])->name('blog');
    Route::get('/partners', [GeneralController::class, 'partners'])->name('partners');
    Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');
    Route::post('/contact-send', [GeneralController::class, 'contactSend'])->name('contactSend')->middleware(['throttle:contact-send']);;


    Route::prefix('Blog')->group(function (){
           Route::get('{slug}', [BlogController::class, 'singleBlog'])->name('singleBlog');
    });

    Route::prefix('Auth')->group(function (){
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::get('/register', [AuthController::class, 'register'])->name('register');
    });

});
