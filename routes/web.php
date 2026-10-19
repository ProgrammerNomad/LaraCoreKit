<?php

use App\Http\Controllers\SitemapController;
use App\Livewire\Changelog;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use Modules\Docs\Http\Controllers\DocsController;

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/', Home::class)->name('home');

Route::get('/changelog', Changelog::class)->name('changelog');

Route::get('/docs', [DocsController::class, 'show'])->name('docs.index');
Route::get('/llms.txt', [DocsController::class, 'machineIndex'])->name('docs.machine-index');
Route::get('/docs-source/{page}', [DocsController::class, 'source'])->where('page', '.*')->name('docs.source');
Route::get('/docs/{page}', [DocsController::class, 'show'])->where('page', '.*')->name('docs.show');
