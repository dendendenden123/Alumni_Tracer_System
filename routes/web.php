<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('template.mazer.dist.index');
});

Route::view('login', 'auth.login');
Route::view('register', 'auth.register');
Route::view('forgot-password', 'auth.forgot-password');

Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('{view}', function ($view) {
    $dist = 'template.mazer.dist.' . $view;
    $src = 'template.mazer.src.' . $view;;
   
    if(view()->exists($dist)){
        return view($dist);
    }else if(view()->exists($src)){
        return view($src);    
    }else{
        abort(404);
    }
});