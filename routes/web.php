<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');



// 🔥 Services Routes
Route::get('/الخدمات', [ServiceController::class, 'index'])->name('services.index');

Route::get('/الخدمات/{slug}', [ServiceController::class, 'show'])->name('services.show');


Route::get('/المقالات', [PostController::class, 'index'])->name('posts.index');

Route::get('/المقالات/{slug}', [PostController::class, 'show'])->name('posts.show');
