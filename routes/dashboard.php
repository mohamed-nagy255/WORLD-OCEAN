<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboard\SeoController;
use App\Http\Controllers\dashboard\OfferController;
use App\Http\Controllers\dashboard\SlideController;
use App\Http\Controllers\dashboard\countrycontroller;
use App\Http\Controllers\dashboard\CategoryController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('back-end.dashboard'); 
    })->name('dashboard');

    //SEO
    Route::controller(SeoController::class)->group(function () {
        Route::get('/dashboard/setting/seo', 'index') -> name('seo.index');
        Route::post('/dashboard/setting/seo/update', 'update')->name('seo.update');
    });

    //Slide
    Route::controller(SlideController::class)->group(function () {
        Route::get('/dashboard/setting/slides', 'index') -> name('slide.index');
        Route::post('/dashboard/setting/slides/insert', 'store') -> name('slide.story');
        Route::post('/dashboard/setting/slides/delete/{id}', 'distroy') -> name('slide.distroy');
    });

    //Countris
    Route::controller(countrycontroller::class)->group(function () {
        Route::get('/dashboard/country', 'index') -> name('country.index');
        Route::post('/dashboard/country/insert', 'store') -> name('country.story');
        Route::post('/dashboard/country/update', 'update') -> name('country.update');
        Route::post('/dashboard/country/delete', 'destroy') -> name('country.destroy');
    });

    //Categories
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/dashboard/category', 'index') -> name('category.index');
        Route::post('/dashboard/category/insert', 'store') -> name('category.story');
        Route::post('/dashboard/category/update', 'update') -> name('category.update');
        Route::post('/dashboard/category/delete', 'destroy') -> name('category.destroy');
    });

    //Offers
    Route::controller(OfferController::class)->group(function () {
        Route::get('/dashboard/offer', 'index') -> name('offer.index');
        Route::get('/dashboard/offer/create', 'create') -> name('offer.create');
        Route::post('/dashboard/offer/insert', 'store') -> name('offer.story');
        Route::get('/dashboard/offer/edit/{id}', 'edit') -> name('offer.edit');
        // Route::post('/dashboard/offer/deleteday/{id}', 'deleteday') -> name('offer.deleteday');
        // Route::post('/dashboard/offer/deletepro/{id}', 'deletepro') -> name('offer.deletepro');
        Route::post('/dashboard/offer/update', 'update') -> name('offer.update');
        Route::post('/dashboard/offer/delete', 'destroy') -> name('offer.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
