<?php

use Illuminate\Support\Facades\Route;

Route::get('/', Modules\Core\Http\Livewire\Home::class)->name('home');
