<?php

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
    return view('frontend.home');
})->name('home');
Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('about-us');
Route::get('/services', function () {
    return view('frontend.services');
})->name('services');
Route::get('/success-stories', function () {
    return view('frontend.stories');
})->name('success.stories');
Route::get('/FAQ', function () {
    return view('frontend.faq');
})->name('faq');
Route::get('/our-blog', function () {
    return view('frontend.blog');
})->name('blog');
Route::get('/contact_us', function () {
    return view('frontend.contact-us');
})->name('contact-us');
