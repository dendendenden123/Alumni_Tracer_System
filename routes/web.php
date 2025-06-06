<?php

use App\Http\Controllers\JobHistoryController;
use App\Models\JobHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlumniOfficerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumnusController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ReactionController;



// AuthController routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginView')->name('login');
    Route::get('/register', 'registerView')->name('register');
    Route::get('/check-email', 'checkEmail');
    Route::get('/check-password-strength', 'checkPasswordStrength');
    Route::post('register', 'register')->name('register');
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
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
        Route::post('/Update-Profile-Picture', 'updateProfilePicture');
        Route::post('/privacy-settings', 'privacySetting');
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
        Route::get('/profile/{id}', 'showOtherProfile');
        Route::get('alumnus/profle', 'show');
    });

    //TestimonyController routes
    Route::controller(TestimonyController::class)->group(function () {
        Route::get('/testimony', 'index');
        Route::post('/testimony/store', 'store');
        Route::post('/testimony/update/{testimony_id}', 'update');
        Route::post('/testimony/update/all', 'update_All');
    });

    //JobHistoryController routes
    Route::controller(JobHistoryController::class)->group(function () {
        Route::get('/job-tracking', 'index');
        Route::post('/jobHistory-store', 'store');
    });

    //DonationController routes
    Route::controller(DonationController::class)->group(function () {
        Route::post('/donation-store', 'store');
        Route::get('/alumni-officer/Manage_donation', 'index');
        Route::post('/alumni-officer/update_donation/{id}', 'update');
        Route::get('/alumni-officer/export_donation', "exportDonation_pdf");
    });

    //ReactionController routes
    Route::controller(ReactionController::class)->group(function () {
        Route::get('/reaction', 'store');
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