<?php

use App\Livewire\About;
use App\Livewire\Main;
use App\Livewire\PostView;
use App\Livewire\Service;
use Illuminate\Support\Facades\Route;

Route::get('/posts/{slug}', PostView::class)->name('posts.view');
Route::get('/', Main::class)->name('main');
Route::get('/about', About::class)->name('about');
Route::get('/service', Service::class)->name('service');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
})->name('fallback');
