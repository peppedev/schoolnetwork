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

Route::get('/', function () {
    return Inertia\Inertia::render('Maintenance');
});

Route::get('/testing', function () {
    $locale = Request::server('HTTP_ACCEPT_LANGUAGE');
    $locale = explode(';', $locale)[0];
    $locale = explode(',', $locale)[0];
    $locale = explode('-', $locale)[0];
    App::setLocale($locale);

    return Inertia\Inertia::render('Testing');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
