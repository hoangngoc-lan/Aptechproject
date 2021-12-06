<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bakery\HomeController;
use App\Http\Controllers\login\LoginController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('ad', [HomeController::class, 'admin']);
Route::get('signin', [HomeController::class, 'signin'])->name('login');
Route::get('signup', [LoginController::class, 'signup'])->name('register');