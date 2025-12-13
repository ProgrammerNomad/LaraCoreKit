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
});
