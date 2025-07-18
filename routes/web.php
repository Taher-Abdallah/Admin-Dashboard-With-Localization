<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(FrontController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/home', 'home')->name('home');
    Route::get('/service', 'service')->name('service');
    
});
Route::controller(AdminController::class)->prefix(LaravelLocalization::setLocale().'/admin')
->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');

        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services', ServiceController::class);
        });
    });
    require __DIR__.'/auth.php';
});

