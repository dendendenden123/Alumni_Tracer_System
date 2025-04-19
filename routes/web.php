<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TestController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [TestController::class, 'test']);

Route::get('{view}', function ($view) {
   
    return view('welcome');
});

// C:\xampp\htdocs\Alumni_Tracer_System\resources\views\template\mazer\dist\index.blade.php