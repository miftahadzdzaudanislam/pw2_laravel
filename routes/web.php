<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Dashboard2Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard2 route
    Route::get('/admin/dashboard', [Dashboard2Controller::class, 'index'])->name('dashboard');

    /**
     * Methode HTTP:
     * 1. Get: untuk menampilkan data / halaman
     * 2. Post: untuk mengirim data seperti form
     * 3. Put: untuk meng-update data
     * 4. Delete: untuk menghapus data
     */

    // Route untuk menampilkan student
    Route::get('admin/student', [StudentController::class, 'index'])->middleware('admin');
    // Route untuk menampilkan form tambah student
    Route::get('admin/student/create', [StudentController::class, 'create'])->middleware('admin');
    // Route untuk mengirim data form student
    Route::post('/admin/student/create', [StudentController::class, 'store'])->middleware('admin');
    // Route untuk menampilkan halaman edit student
    Route::get('admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit')->middleware('admin');
    // Route untuk menyimpan hasil update student
    Route::put('admin/student/update/{id}', [StudentController::class, 'update'])->middleware('admin');
    // Route untuk menghapus data student
    Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy'])->middleware('admin');

    // Route untuk menampilkan course
    Route::get('admin/course', [CourseController::class, 'show']);
    // Route untuk menampilkan form tambah course
    Route::get('admin/course/create', [CourseController::class, 'create'])->middleware('admin');
    // Route untuk mengirim data form course
    Route::post('/admin/course/create', [CourseController::class, 'store'])->middleware('admin');
    // Route untuk menampilkan halaman edit course
    Route::get('admin/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit')->middleware('admin');
    // Route untuk menyimpan hasil update course
    Route::put('admin/course/update/{id}', [CourseController::class, 'update'])->middleware('admin');
    // Route untuk menghapus data course
    Route::delete('admin/course/delete/{id}', [CourseController::class, 'destroy'])->middleware('admin');
});

require __DIR__.'/auth.php';

// route untuk menampilkan salam
Route::get('/salam', function(){ // '/' opsional
    return 'Assalamualaikum';
});

Route::get('about', function(){
    return view('about');
});