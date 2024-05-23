<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Methode untik menampilkan halaman course
    public function show(){
        $courses = Course::all();

        return view('admin/contents/course/index', [
            'courses' => $courses
        ]);
    }
}
