<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

// Trang Welcome mặc định
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/admin', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

// Categories
Route::get('/admin/categories', [CategoryController::class, 'index'])
    ->name('admin.categories.index');

// Products
Route::get('/admin/products', [ProductController::class, 'index'])
    ->name('admin.products.index');

// About
Route::get('/admin/about', [DashboardController::class, 'about'])
    ->name('admin.about');