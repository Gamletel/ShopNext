<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group([
    "as" => "users",
    "prefix" => "users",
], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
});
