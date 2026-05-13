<?php

use App\Http\Controllers\SitemapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Docs\Http\Controllers\DocsController;
use Modules\Core\Http\Livewire\Changelog;

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/locale/{locale}', function (string $locale, Request $request) {
    if (! in_array($locale, ['en', 'hi', 'ar'])) {
        abort(400);
    }

    session()->put('locale', $locale);

    // Use explicit return_to param if provided, otherwise fall back to Referer
    $returnTo = $request->query('return_to');
    if ($returnTo && str_starts_with($returnTo, url('/'))) {
        return redirect($returnTo);
    }

    return redirect()->back('/');
})->name('locale.switch');

Route::get('/', Modules\Core\Http\Livewire\Home::class)->name('home');

Route::get('/changelog', Changelog::class)->name('changelog');

Route::get('/docs', [DocsController::class, 'show'])->name('docs.index');
Route::get('/docs/{page}', [DocsController::class, 'show'])->where('page', '.*')->name('docs.show');

