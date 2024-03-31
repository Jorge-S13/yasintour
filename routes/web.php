<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Models\Country;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;

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

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::middleware('localization')->group(function(){
    Route::get('/', MainController::class)->name('home');

    Route::get('/about', [MainController::class,'about'])->name('about');

    Route::get('/aviakassa', [MainController::class,'aviakassa'])->name('aviakassa');

    Route::get('/services', [MainController::class,'services'])->name('services');

    Route::get('/countries', [MainController::class,'countries'])->name('packages');


    Route::get('/country/{id}',[\App\Http\Controllers\CountryController::class,'show'])->name('country.show');
    Route::get('/destination/{id}',[\App\Http\Controllers\DestinationController::class,'show'])->name('destination.show');

    Route::get('/tours', [MainController::class,'tours'])->name('destination');

    Route::get('/booking', [MainController::class,'booking'])->name('booking');

    Route::get('/team', [MainController::class,'team'])->name('team');

    Route::get('/testimonial', [MainController::class,'testimonial'])->name('testimonial');

    Route::get('/contact', [MainController::class,'contact'])->name('contact');
});

Route::post('/contact/save', [ContactController::class,'save'])->name('saveContact');
