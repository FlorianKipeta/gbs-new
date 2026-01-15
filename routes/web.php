<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::post('/contacts', [ContactController::class, 'submit'])->name('contacts.submit');
