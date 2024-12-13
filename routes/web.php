<?php

use Illuminate\Support\Facades\Route;

Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.submit');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layout'); // Homepage
});

Route::get('/about', function () {
    return view('pages.about'); // About page
});

Route::get('/auctions', function () {
    return view('pages.auctions'); // Auctions page
});

Route::get('/faq', function () {
    return view('pages.faq'); // FAQ page
});

Route::get('/login', function () {
    return view('pages.login'); // Login page
});

Route::get('/signup', function () {
    return view('pages.signup'); // Signup page
});

Route::get('/team', function () {
    return view('pages.team'); // Team page
});

Route::get('/product2', function () {
    return view('pages.product2'); // Product page
});