<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/v2', function () {
    return view('welcome-v2');
})->name('welcome-v2');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::post('/contacts', [ContactController::class, 'submit'])->name('contacts.submit');
