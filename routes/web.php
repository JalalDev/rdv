<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
});

Route::get('/pages/contact', function () {
    return view('contact');
});

Route::get('/pages/services', function () {
    return view('services');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
