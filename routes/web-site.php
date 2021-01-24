<?php

/**
 * Public routes, for non authenticated views such as the 'welcome' page and privacy policy.
 */

use App\Http\Controllers\Site\ViewsController;
use Illuminate\Support\Facades\Route;

Route::name('site.')->group(function () {
    Route::get('/', [ViewsController::class, 'welcome'])->name('welcome');
});
