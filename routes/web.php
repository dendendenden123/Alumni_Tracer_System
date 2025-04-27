<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlumniOfficerController;
use App\Mail\EmailConfirmation;

Route::get('/', function () {
    return view('template.denvir.dist.index');
});

// AuthController routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/check-email', 'checkEmail');
    Route::get('/check-password-strength', 'checkPasswordStrength');
    Route::post('register', 'register')->name('register');
    Route::post('login', 'login')->name('login');
    Route::post('logout', 'logout')->name('logout');
    Route::post('/email-Confirmation', 'sendMailConfirmation');
    Route::post('/email-Confirmation/verify', 'verifyMailConfirmation');
});

// AlumniOfficerController routes
Route::controller(AlumniOfficerController::class)->group(function () {
    Route::get('officer-create', 'create');
    Route::post('/alumni-officer/store', 'store')->name('alumni-officer.store');
});

// View routes
Route::view('register', 'auth.register');
Route::view('login', 'auth.login');
Route::view('alumnus', 'template.denvir.dist.alumnus-index');
Route::view('officer', 'template.denvir.dist.alumni-officer');

// Dynamic view route
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