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

Route::get('/check-email', [AuthController::class, 'checkEmail']);
Route::get('/check-password-strength', [AuthController::class, 'checkPasswordStrength']);

Route::view('register', 'auth.register');
Route::view('login', 'auth.login');

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/email-Confirmation', [AuthController::class, 'sendMailConfirmation']);
Route::post('/email-Confirmation/verify', [AuthController::class, 'verifyMailConfirmation']);

Route::view('alumnus', 'template.denvir.dist.alumnus-index');

Route::view('officer', 'template.denvir.dist.alumni-officer');
Route::get('officer-create', [AlumniOfficerController::class, 'create']);
Route::post('/alumni-officer/store', [AlumniOfficerController::class, 'store'])->name('alumni-officer.store');





Route::get('{view}', function ($view) {
    $dist = 'template.denvir.dist.' . $view;
    $src = 'template.denvir.src.' . $view;;
   
    if(view()->exists($dist)){
        return view($dist);
    }else if(view()->exists($src)){
        return view($src);    
    }else{
        abort(404);
    }
});