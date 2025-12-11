<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Livewire\BlogDetail;
use Modules\Blog\Http\Livewire\BlogList;

Route::get('/blog', BlogList::class)->name('blog.index');
Route::get('/blog/{slug}', BlogDetail::class)->name('blog.show');
