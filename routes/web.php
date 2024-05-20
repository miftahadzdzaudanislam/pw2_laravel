<?php

use App\Http\Controllers\Dashboard2Controller;
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

/**
 * Methode HTTP:
 * 1. Get: untuk menampilkan data / halaman
 * 2. Post: untuk mengirim data seperti form
 * 3. Put: untuk meng-update data
 * 4. Delete: untuk menghapus data
 */

// Dashboard2 route
Route::get('/admin/dashboard', [Dashboard2Controller::class, 'index']);