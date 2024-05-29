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

    // Metode untuk menampilkan form tambah course
    public function create(){
        return view('admin.contents.course.create');
    }

    // Methode untuk menyimpan data course
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required'
        ]);

        // Simpan data ke database
        Course::create([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc
        ]);

        // arahkan ke course index
        return redirect('/admin/course')->with('pesan', 'Berhasil menambah data.');
    }

    // Methode untuk menampilkan halaman edit course
    public function edit($id){
        $course = Course::find($id);

        return view('admin.contents.course.edit', ['course' => $course]);
    }

    // Methode untuk menyimpan update
    public function update($id, Request $request){
        $course = Course::find($id);

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required'
        ]);

        // Simpan perubahan
        $course->update([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc
        ]);

        // Arahkan ke course index
        return redirect('/admin/course')->with('pesan', 'Berhasil Mengubah Data.');
    }

    // Methode untuk menghapus data course
    public function destroy($id){
        $course = Course::find($id);

        $course->delete();

        return redirect('/admin/course')->with('pesan', 'Berhasil Menghapus Data.');

    }
}
