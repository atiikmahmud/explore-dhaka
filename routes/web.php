<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',                 [HomeController::class, 'index'])->name('home');
Route::get('/single-post/{id}', [HomeController::class, 'singlePost'])->name('post');
Route::get('/historical-place', [HomeController::class, 'hisPlace'])->name('his.place');
Route::get('/hotel',            [HomeController::class, 'hotel'])->name('hotel');
Route::get('/restaurent',       [HomeController::class, 'restaurent'])->name('restaurent');
Route::get('/hospital',         [HomeController::class, 'hospital'])->name('hospital');
Route::get('/about-us',         [HomeController::class, 'aboutUs'])->name('about');

Route::get('/contacts',         [HomeController::class, 'contacts'])->name('contacts');
Route::post('/contacts',        [HomeController::class, 'storeContacts'])->name('contact.store');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard',    [AdminController::class, 'index'])->name('dashboard');
    Route::get('/posts',        [AdminController::class, 'posts'])->name('posts');
    Route::get('/add-post',     [AdminController::class, 'addPost'])->name('add.post');
    Route::post('/add-post',    [AdminController::class, 'storePost'])->name('store.post');
    Route::get('/comments',     [AdminController::class, 'comments'])->name('comments');
    Route::get('/messages',     [AdminController::class, 'messages'])->name('messages');
    Route::get('/read-message/{id}',   [AdminController::class, 'readMessage'])->name('read.message');
    Route::get('/delete-message/{id}', [AdminController::class, 'deleteMessage'])->name('delete.message');
    Route::get('/sliders',      [AdminController::class, 'sliders'])->name('sliders');
});
