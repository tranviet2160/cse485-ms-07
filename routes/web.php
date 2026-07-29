<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');

    Route::get('/products', [ProductController::class, 'index'])
        ->name('products.index');

    Route::get('/about', [DashboardController::class, 'about'])
        ->name('about');

    Route::get('/flash-demo', function () {
        return redirect()->route('admin.dashboard')
            ->with('success', 'Layout OK — san sang Migration');
    })->name('flash');
});