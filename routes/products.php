<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'products',
    'as' => 'products.',
], function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{id}', [ProductController::class, 'show'])->name('show');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::patch('/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
});
