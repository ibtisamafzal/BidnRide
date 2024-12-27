<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;

// Public Routes
Route::get('/', function () {
    return view('welcome'); // Home route
})->name('home');

// Pages Routes
Route::get('/auctions', [PageController::class, 'auctions'])->name('pages.auctions');
Route::get('/product2', [PageController::class, 'show'])->name('product2');
Route::get('/product', [PageController::class, 'show'])->name('pages.product');
Route::get('/faq', [PageController::class, 'faq'])->name('pages.faq');
Route::get('/about', [PageController::class, 'about'])->name('pages.about');
Route::get('/team', [PageController::class, 'team'])->name('pages.team');



// Authentication Routes (Breeze)
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::post('/signup', [PageController::class, 'handleSignup'])->name('signup.submit');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Email Verification
Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');

// Dashboard (Protected)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Include Auth Routes
require __DIR__.'/auth.php';
