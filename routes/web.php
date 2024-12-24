<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('welcome'); // Home route
})->name('home');

Route::get('/auctions', [PageController::class, 'auctions'])->name('pages.auctions');
Route::get('/faq', [PageController::class, 'faq'])->name('pages.faq');
Route::get('/about', [PageController::class, 'about'])->name('pages.about');
Route::get('/team', [PageController::class, 'team'])->name('pages.team');
Route::get('/signup', [PageController::class, 'signup'])->name('pages.signup');
