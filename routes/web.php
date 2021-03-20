<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/iii', function () {
    return view('iii');
});

Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
	Route::get('/', [FrontendController::class,'index'] )->name('index');
    Route::get('/contact', [FrontendController::class,'contact'] )->name('contact');
    Route::get('/about', [FrontendController::class,'about'] )->name('about');
    Route::get('/service', [FrontendController::class,'service'] )->name('service');
    Route::get('/ser', [FrontendController::class,'ser'] )->name('ser');
});


//Route::get('/', [FrontendController::class,'index'] )->name('index');

//Route::get('/contact', [FrontendController::class,'contact'] )->name('contact');

//Route::get('/about', [FrontendController::class,'about'] )->name('about');

//Route::get('/service', [FrontendController::class,'service'] )->name('service');
