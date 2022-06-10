<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::inertia('/', 'Home');
Route::inertia('/contact', 'Contact');
Route::post('/contact', function () {
    request()->validate([
        'email' => ['required', 'email'],
        'message' => ['required', 'min:5']
    ]);

    return back()->with('success', 'All good!');
});
