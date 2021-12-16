<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bakery\HomeController;
use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\cart\cart_controller;
use App\Http\Controllers\bakery\DetailsController;

Route::prefix('cart')->group(function () {
	Route::get('/',[cart_controller::class,'cart'])->name('cart');
	Route::post('/update/{id}',[cart_controller::class,'cart_update'])->name('cart_update');
	Route::post('/order',[cart_controller::class,'cart_order'])->name('cart_order');
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('ad', [HomeController::class, 'admin']);
Route::get('signin', [HomeController::class, 'signin'])->name('login');
Route::get('signup', [LoginController::class, 'signup'])->name('register');

Route::get('details', [DetailsController::class, 'details'])->name('bakery.Details.bookdetail');