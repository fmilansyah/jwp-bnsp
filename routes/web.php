<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PolyclinicController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\InpatientController;

Route::get('/', [LandingPageController::class, 'index']);
Route::post('/store-registration', [LandingPageController::class, 'storeRegistration'])->name('store.registration');

Route::prefix('/admin')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/registration', [RegistrationController::class, 'index'])->name('admin.registration');
        Route::resource('user', UserController::class)->names('admin.user');
        Route::resource('polyclinic', PolyclinicController::class)->names('admin.polyclinic');
        Route::resource('doctor', DoctorController::class)->names('admin.doctor');
        Route::resource('room', RoomController::class)->names('admin.room');
        Route::resource('inpatient', InpatientController::class)->names('admin.inpatient');
        Route::get('/inpatient/status/{id}', [InpatientController::class, 'updateStatus'])->name('admin.inpatient.status');
    });
});

require __DIR__.'/auth.php';
