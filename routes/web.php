<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/المقالات', [PostController::class, 'index'])->name('posts.index');

Route::get('/المقالات/{slug}', [PostController::class, 'show'])->name('posts.show');
