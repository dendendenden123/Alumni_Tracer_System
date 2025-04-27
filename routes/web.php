<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlumniOfficerController;

// Public Routes
Route::view('/', 'template.denvir.dist.index');
Route::view('register', 'auth.register');
Route::view('login', 'auth.login');
Route::view('alumnus', 'template.denvir.dist.alumnus-index');
Route::view('officer', 'template.denvir.dist.alumni-officer');

// Auth Routes
Route::prefix('auth')->group(function () {
    Route::get('/check-email', [AuthController::class, 'checkEmail']);
    Route::get('/check-password-strength', [AuthController::class, 'checkPasswordStrength']);
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/email-confirmation', [AuthController::class, 'sendMailConfirmation']);
    Route::post('/email-confirmation/verify', [AuthController::class, 'verifyMailConfirmation']);
});

// Alumni Officer Routes
Route::prefix('alumni-officer')->group(function () {
    Route::get('/create', [AlumniOfficerController::class, 'create']);
    Route::post('/store', [AlumniOfficerController::class, 'store'])->name('alumni-officer.store');
});

// Dynamic View Route
Route::get('{view}', function ($view) {
    $dist = 'template.denvir.dist.' . $view;
    $src = 'template.denvir.src.' . $view;

    if (view()->exists($dist)) {
        return view($dist);
    } elseif (view()->exists($src)) {
        return view($src);
    } else {
        abort(404);
    }
});
