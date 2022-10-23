<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/single-post', [HomeController::class, 'singlePost'])->name('post');
Route::get('/historical-place', [HomeController::class, 'hisPlace'])->name('his.place');
Route::get('/hotel', [HomeController::class, 'hotel'])->name('hotel');
Route::get('/restaurent', [HomeController::class, 'restaurent'])->name('restaurent');
Route::get('/hospital', [HomeController::class, 'hospital'])->name('hospital');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});
