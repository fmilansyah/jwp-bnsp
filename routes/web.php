<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [LandingPageController::class, 'index']);
Route::post('/store-registration', [LandingPageController::class, 'storeRegistration'])->name('store.registration');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
});

require __DIR__.'/auth.php';
