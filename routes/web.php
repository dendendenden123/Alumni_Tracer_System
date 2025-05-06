<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlumniOfficerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumnusController;


// AuthController routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginView')->name('login');
    Route::get('/register', 'registerView')->name('register');
    Route::get('/check-email', 'checkEmail');
    Route::get('/check-password-strength', 'checkPasswordStrength');
    Route::post('register', 'register')->name('register');
    Route::post('login', 'login')->name('login');
    Route::post('logout', 'logout')->name('logout');
    Route::post('/email-Confirmation', 'sendMailConfirmation');
    Route::post('/email-Confirmation/verify', 'verifyMailConfirmation');
});

// Authenticated routes
Route::middleware(['auth'])->group(function () {

    // AlumniOfficerController routes
    Route::get('/', function () {
        return view('template.denvir.dist.index');
    });

    // UserController routes
    Route::controller(UserController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('user/edit/{id}', 'edit')->name('user.edit');
        Route::post('user/update/{id}', 'update')->name('user.update');
        Route::post('user/delete/{id}', 'destroy')->name('user.delete');
    });

    // AlumniOfficerController routes
    Route::controller(AlumniOfficerController::class)->group(function () {
        Route::get('/officer', 'index');
        Route::get('/officer-create', 'create');
        Route::post('/alumni-officer/store', 'store')->name('alumni-officer.store');
    });

    //AlumnusController routes
    Route::controller(AlumnusController::class)->group(function () {
        Route::get('alumnus', 'index');
    });

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
});