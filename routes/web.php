<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',                 [HomeController::class, 'index'])->name('home');
Route::get('/search',           [HomeController::class, 'search'])->name('search');
Route::get('/single-post/{id}', [HomeController::class, 'singlePost'])->name('post');
Route::post('/commnet',         [HomeController::class, 'storeComment'])->name('store.comment');
Route::get('/historical-place', [HomeController::class, 'hisPlace'])->name('his.place');
Route::get('/hotel',            [HomeController::class, 'hotel'])->name('hotel');
Route::get('/restaurant',       [HomeController::class, 'restaurant'])->name('restaurant');
Route::get('/hospital',         [HomeController::class, 'hospital'])->name('hospital');
Route::get('/about-us',         [HomeController::class, 'aboutUs'])->name('about');
Route::get('/contacts',         [HomeController::class, 'contacts'])->name('contacts');
Route::post('/contacts',        [HomeController::class, 'storeContacts'])->name('contact.store');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard',              [AdminController::class, 'index'])->name('dashboard');
    Route::get('/posts',                  [AdminController::class, 'posts'])->name('posts');
    Route::get('/edit-post/{id}',         [AdminController::class, 'editPost'])->name('edit.post');
    Route::post('/update-post',           [AdminController::class, 'updatePost'])->name('update.post');
    Route::get('/delete-post/{id}',       [AdminController::class, 'deletePost'])->name('delete.post');
    Route::get('/admin-single-post/{id}', [AdminController::class, 'singlePost'])->name('single.post');
    Route::get('/add-post',               [AdminController::class, 'addPost'])->name('add.post');
    Route::post('/add-post',              [AdminController::class, 'storePost'])->name('store.post');
    Route::get('/comments',               [AdminController::class, 'comments'])->name('comments');
    Route::get('/delete-comment/{id}',    [AdminController::class, 'deleteComment'])->name('delete.comment');
    Route::get('/messages',               [AdminController::class, 'messages'])->name('messages');
    Route::get('/read-message/{id}',      [AdminController::class, 'readMessage'])->name('read.message');
    Route::get('/delete-message/{id}',    [AdminController::class, 'deleteMessage'])->name('delete.message');
    Route::get('/sliders',                [AdminController::class, 'sliders'])->name('sliders');
    Route::post('/update-slider',         [AdminController::class, 'sliderUpadte'])->name('update.slide');
});
