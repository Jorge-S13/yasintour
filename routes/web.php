<?php

use App\Http\Controllers\ContactController;
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
Route::get('/', function () {
    $process = \App\Models\MainPage::first();
    $aboutPage = \App\Models\AboutPage::first();
    $servicesPage = \App\Models\ServicesPage::first();
    $countryPage = \App\Models\CountryPage::first();
    $destinationPage = \App\Models\TourPage::first();
    return view('pages.home',compact(
        'process',
        'aboutPage',
        'servicesPage',
        'countryPage',
        'destinationPage',
    ));
})->name('home')->middleware('localization');

Route::get('/about', function () {
    $aboutPage = \App\Models\AboutPage::first();
    return view('pages.about',compact('aboutPage'));
})->name('about')->middleware('localization');

Route::get('/aviakassa', function () {
    $kassaPage = \App\Models\AviakassaPage::first();
    return view('pages.aviakassa',compact('kassaPage'));
})->name('aviakassa')->middleware('localization');

Route::get('/services', function () {
    $servicesPage = \App\Models\ServicesPage::first();
    return view('pages.services',compact(['servicesPage']));
})->name('services')->middleware('localization');

Route::get('/packages', function () {
    $country = Country::all();
    $countryPage = \App\Models\CountryPage::first();
    return view('pages.packages',compact('country','countryPage'));
})->name('packages')->middleware('localization');

Route::get('/country/{id}',[\App\Http\Controllers\CountryController::class,'show'])->name('country.show')->middleware('localization');
Route::get('/destination/{id}',[\App\Http\Controllers\DestinationController::class,'show'])->name('destination.show')->middleware('localization');

Route::get('/destination', function () {
    $destination = Destination::all();
    $destinationPage = \App\Models\TourPage::first();
    return view('pages.destination',compact('destination','destinationPage'));
})->name('destination')->middleware('localization');

Route::get('/booking', function () {
    return view('pages.booking');
})->name('booking')->middleware('localization');

Route::get('/team', function () {
    return view('pages.team');
})->name('team')->middleware('localization');

Route::get('/testimonial', function () {
    return view('pages.testimonial');
})->name('testimonial')->middleware('localization');

Route::get('/404', function () {
    return view('pages.404');
})->name('404')->middleware('localization');

Route::get('/contact', function () {
    $contactPage = \App\Models\ContactPage::first();
    return view('pages.contact',compact('contactPage'));
})->name('contact')->middleware('localization');

Route::post('/contact/save', [ContactController::class,'save'])->name('saveContact');
