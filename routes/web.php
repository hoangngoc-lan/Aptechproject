<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bakery\HomeController;


Route::get('/', function () {
    return view('welcome');

     
});
Route::get('home',[HomeController::class,'home']);