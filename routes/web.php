<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

// Static Pages
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/about', 'pages.about')->name('pages.about');
Route::view('/auctions', 'pages.auctions')->name('pages.auctions');
Route::view('/faq', 'pages.faq')->name('pages.faq');
Route::view('/team', 'pages.team')->name('pages.team');
Route::view('/product2', 'pages.product2')->name('pages.product2');

// Authentication Routes
Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth');
Route::get('/login', [AuthController::class, 'loginForm'])->name('pages.login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Sign Up Routes
Route::get('/signup', [PageController::class, 'signup'])->name('pages.signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.submit');
