<?php

use App\Models\Country;
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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/packages', function () {
    $country = Country::all();
    return view('pages.packages',compact('country'));
})->name('packages');

Route::get('/destination', function () {
    return view('pages.destination');
})->name('destination');

Route::get('/booking', function () {
    return view('pages.booking');
})->name('booking');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/testimonial', function () {
    return view('pages.testimonial');
})->name('testimonial');

Route::get('/404', function () {
    return view('pages.404');
})->name('404');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
