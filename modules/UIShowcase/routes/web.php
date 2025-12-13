<?php

use Illuminate\Support\Facades\Route;

Route::prefix('ui-showcase')->name('showcase.')->group(function () {
    Route::get('/', function () {
        return view('showcase::index');
    })->name('index');
    
    Route::get('/typography', function () {
        return view('showcase::typography');
    })->name('typography');
    
    Route::get('/buttons', function () {
        return view('showcase::buttons');
    })->name('buttons');
    
    Route::get('/forms', function () {
        return view('showcase::forms');
    })->name('forms');
    
    Route::get('/navigation', function () {
        return view('showcase::navigation');
    })->name('navigation');
    
    Route::get('/layouts', function () {
        return view('showcase::layouts');
    })->name('layouts');
    
    Route::get('/data-display', function () {
        return view('showcase::data-display');
    })->name('data-display');
    
    Route::get('/feedback', function () {
        return view('showcase::feedback');
    })->name('feedback');
    
    Route::get('/charts', function () {
        return view('showcase::charts');
    })->name('charts');
    
    Route::get('/media', function () {
        return view('showcase::media');
    })->name('media');
    
    Route::get('/auth', function () {
        return view('showcase::auth');
    })->name('auth');
    
    Route::get('/landing-hero', function () {
        return view('showcase::landing-hero');
    })->name('landing-hero');
    
    Route::get('/landing-pricing', function () {
        return view('showcase::landing-pricing');
    })->name('landing-pricing');
    
    Route::get('/landing-content', function () {
        return view('showcase::landing-content');
    })->name('landing-content');
});
