<?php

use Illuminate\Support\Facades\Route;
use Modules\Docs\Http\Controllers\DocsController;
use Modules\Core\Http\Livewire\Changelog;

Route::get('/', Modules\Core\Http\Livewire\Home::class)->name('home');

Route::get('/changelog', Changelog::class)->name('changelog');

Route::get('/docs', [DocsController::class, 'show'])->name('docs.index');
Route::get('/docs/{page}', [DocsController::class, 'show'])->where('page', '.*')->name('docs.show');

