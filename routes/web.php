<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\home\OffersController;
use App\Http\Controllers\home\CountryController;
use App\Http\Controllers\home\CategoryController;

// Home page
Route::get('/', [HomeController::class, 'index']);

// countries page 
Route::get('/more/countries', [CountryController::class, 'index']);

// Offers page 
Route::get('/more/offers', [OffersController::class, 'index']);
Route::get('/more/offers/{name}', [OffersController::class, 'show']);

// Category page 
Route::get('/more/category/{name}', [CategoryController::class, 'index']);
Route::get('/more/category/{name}/{country}', [CategoryController::class, 'show']);

// Contact Page 
Route::get('/contact', function () {
    return view('front-end.contact');
});

// about us Page 
Route::get('/about', function () {
    return view('front-end.about');
});