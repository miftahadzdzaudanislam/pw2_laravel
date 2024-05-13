<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route untuk menampilkan salam
Route::get('/salam', function(){ // '/' opsional
    return 'Assalamualaikum';
});

// panggil controler (profile)
Route::get('profile', function(){
    return view('profile');
});

Route::get('about', function(){
    return view('about');
});

use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'show']);

use App\Http\Controllers\AdminController;
Route::get('admin', [AdminController::class, 'index'])->name('admin');