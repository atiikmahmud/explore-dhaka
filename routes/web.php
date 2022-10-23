<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/single-post', [HomeController::class, 'singlePost'])->name('post');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});
