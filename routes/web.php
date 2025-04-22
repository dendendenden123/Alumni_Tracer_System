<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\AlumniOfficerController;
use App\Http\Controllers\UserController;
use App\Mail\EmailConfirmation;

Route::get('/', function () {
    return view('template.denvir.dist.index');
});

Route::get('/check-email', [UserController::class, 'checkEmail']);
Route::get('/check-password-strength', [UserController::class, 'checkPasswordStrength']);

Route::view('register', 'auth.register');
Route::view('login', 'auth.login');
Route::view('forgot-password', 'auth.forgot-pass`word');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::view('alumnus', 'template.denvir.dist.alumnus-index');

Route::view('officer', 'template.denvir.dist.alumni-officer');
Route::get('officer-create', [AlumniOfficerController::class, 'create']);
Route::post('/alumni-officer/store', [AlumniOfficerController::class, 'store'])->name('alumni-officer.store');


Route::post('/email-Confirmation', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $email = $request->email;

    // Generate a 6-digit random code
    $code = rand(100000, 999999);

    // Store the code in the session
    session(['email_verification_code_' . $email => $code]);

    // Send the email
    Mail::to($email)->send(new EmailConfirmation($code));

    return response()->json(['success' => true]);
});

Route::post('/email-Confirmation/verify', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'code' => 'required'
    ]);

    $sessionKey = 'email_verification_code_' . $request->email;
    $storedCode = session($sessionKey);

    if ($storedCode && $storedCode == $request->code) {
        session()->forget($sessionKey); // Optional: clear after use
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false, 'message' => 'Invalid or expired code.']);
});


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