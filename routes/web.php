<?php

use App\Http\Controllers\ContactForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('Home');

Route::get('/about', function () {
    return view('pages.about');
})->name('About');

Route::get('/blog-details', function () {
    return view('pages.blog-details');
})->name('Blog-details');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('Blog');

Route::get('/services', function () {
    return view('pages.services');
})->name('Services');

Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('Testimonials');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact_form');

Route::post('/contact', [ContactForm::class, 'get_data'])->name('contact.submit');