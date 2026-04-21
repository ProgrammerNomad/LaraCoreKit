<?php

use Illuminate\Support\Facades\Route;
use Modules\Docs\Http\Controllers\DocsController;

Route::get('/docs', [DocsController::class, 'show'])->name('docs.index');
Route::get('/docs/{page}', [DocsController::class, 'show'])->where('page', '.*')->name('docs.show');
