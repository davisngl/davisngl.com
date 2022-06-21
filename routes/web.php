<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
})->name('home.index');

Route::get('about', function () {
   return inertia('About');
})->name('about.index');

Route::get('contact', [ContactController::class, 'index'])
    ->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])
    ->middleware(['throttle:contact'])
    ->name('contact.store');

Route::get('articles', [ArticleController::class, 'index'])
    ->name('article.index');
Route::get('articles/{article:slug}', [ArticleController::class, 'show'])
    ->name('article.show');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])
        ->name('login.create');

    Route::post('login', [LoginController::class, 'store'])
        ->name('login.store');
});
