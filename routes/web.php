<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');

Route::resource('users', UserController::class);
