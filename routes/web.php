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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/portofolio', [App\Http\Controllers\HomeController::class, 'portofolio']);

Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about']);

Route::resource('/contact', App\Http\Controllers\ContactController::class);

Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index']);