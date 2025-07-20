<?php

use App\Models\Feature;
use App\Models\Testmonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestmonialController;
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
        // =============================================  ServiceController
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services', ServiceController::class);
        });
        // ============================================================  featuresController
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        });
        // ============================================================  settingsController
        Route::controller(SettingController::class)->group(function () {
            Route::resource('settings', SettingController::class)->only(['index', 'update']);
        });
        // ============================================================  testmonialsController
        Route::controller(TestmonialController::class)->group(function () {
            Route::resource('testmonials', TestmonialController::class);
        });


    });
    require __DIR__.'/auth.php';
});

