<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

use App\Http\Controllers\HubController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\ArticleController;

// GETS -view-
Route::get('/', [HubController::class, 'hub'])->name('hub');
Route::get('/view', [HubController::class, 'viewData'])->name('view');

// POSTS -store-
Route::post('/famille-store', [FamilleController::class, 'store'])->name('famille.store');
Route::post('/article-store', [ArticleController::class, 'store'])->name('article.store');

// PUTS -update-
Route::put('/famille-update/{id}', [FamilleController::class, 'update'])->name('famille.update');
Route::put('/article-update/{id}', [ArticleController::class, 'update'])->name('article.update');


