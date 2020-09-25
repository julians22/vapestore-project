<?php

use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;


// Product and Category route

// All route names are prefixed with 'admin.product'.
Route::group([
    'prefix' => 'product',
    'as' => 'product.',
    'middleware' => 'role:'.config('access.users.admin_role'),
], function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
});

Route::group([
    'prefix' => 'category',
    'as' => 'category.',
    'middleware' => 'role:'.config('access.users.admin_role'),
], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
});
