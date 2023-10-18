<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/about');

Route::get('about', function () {
   return inertia('About');
})->name('about.index');

Route::get('contact', [ContactController::class, 'index'])
    ->name('contact.index');
//Route::post('contact', [ContactController::class, 'store'])
//    ->middleware(['throttle:contact'])
//    ->name('contact.store');

Route::get('articles', [ArticleController::class, 'index'])
    ->name('article.index');
Route::get('articles/{article:slug}', [ArticleController::class, 'show'])
    ->name('article.show');

Route::get('projects', [ProjectController::class, 'index'])
    ->name('project.index');
Route::get('projects/{project:slug}', [ProjectController::class, 'show'])
    ->name('project.show');
