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
Route::get('/', MainController::class)->name('home')->middleware('localization');

Route::get('/about', [MainController::class,'about'])->name('about')->middleware('localization');

Route::get('/aviakassa', [MainController::class,'aviakassa'])->name('aviakassa')->middleware('localization');

Route::get('/services', [MainController::class,'services'])->name('services')->middleware('localization');

Route::get('/countries', [MainController::class,'countries'])->name('packages')->middleware('localization');


Route::get('/country/{id}',[\App\Http\Controllers\CountryController::class,'show'])->name('country.show')->middleware('localization');
Route::get('/destination/{id}',[\App\Http\Controllers\DestinationController::class,'show'])->name('destination.show')->middleware('localization');

Route::get('/tours', [MainController::class,'tours'])->name('destination')->middleware('localization');

Route::get('/booking', [MainController::class,'booking'])->name('booking')->middleware('localization');

Route::get('/team', [MainController::class,'team'])->name('team')->middleware('localization');

Route::get('/testimonial', [MainController::class,'testimonial'])->name('testimonial')->middleware('localization');

Route::get('/contact', [MainController::class,'contact'])->name('contact')->middleware('localization');

Route::post('/contact/save', [ContactController::class,'save'])->name('saveContact');
