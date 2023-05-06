<?php

use Illuminate\Support\Facades\Route;

//Google Services
Route::get('/auth/{service}', function ($service) {
    return "service : " . $service;
})->name('socialite');

Route::get('/auth/callback', function () {
    return 'callback google';
})->name('Socialite.callback');

/* login */
Route::get('/login', function () {
    return 'login';
})->name('auth.login');

/* Register */
Route::get('/register', function () {
    return 'register';
})->name('auth.register');

/* Reset Password */
Route::get('/rest-password', function () {
    return 'rest password';
})->name('auth.rest-password');

/* Send Email */
Route::get('/send-email', function () {
    return 'send email';
})->name('auth.send-email');
