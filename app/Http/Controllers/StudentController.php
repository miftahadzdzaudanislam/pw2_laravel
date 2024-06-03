<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // methode untuk menampilkan halaman student
    public function index(){
        // mendapatkan data student dari database
        $students = Student::all();

        // panggil view dan kirim data ke view
        return view('admin.contents.student.index',[
            'students' => $students
        ]);
    }

    // methode untuk menampilkan form tambah student
    public function create(){
        // dapatkan data courses dari database
        $courses = Course::all();

        return view('admin.contents.student.create', [
            'courses' => $courses
        ]);
    }

    // methode untuk menyimpan data student
    public function store(Request $request){
        // dd($request->all()); // tes coba simpan
        // validasi data yang diterima
        $request->validate([
            'name' => 'required',
            'nim' => 'required | numeric',
            'major' => 'required',
            'class' => 'required',
            'couse_id' => 'nullable | numeric'
        ]);

        // simpan ke database
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'couse_id' => $request->couse_id
        ]);

        // redirect = arahkan ke student index
        return redirect('/admin/student')->with('pesan', 'Berhasil Menambahkan Data.');
    }

    // methode untuk menampilkan halaman edit
    public function edit($id){
        // cari data student
        $student = Student::find($id); // SELECT * FROM student WHERE id = $id

        // kirim student ke halaman view edit
        return view('admin.contents.student.edit', ['student' => $student]);
    }

    // methode untuk menyimpan hasil update
    public function update($id, Request $request){
        // cari data student
        $student = Student::find($id); // SELECT * FROM student WHERE id = $id

        // validasi data yang diterima
        $request->validate([
            'name' => 'required',
            'nim' => 'required | numeric',
            'major' => 'required',
            'class' => 'required'
        ]);

        // Simpan perubahan
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
        ]);

        // redirect = arahkan ke student index
        return redirect('/admin/student')->with('pesan', 'Berhasil Mengubah Data.');
    }

    // Methode untuk menghapus data student
    public function destroy($id){
        // cari data student
        $student = Student::find($id); // SELECT * FROM student WHERE id = $id

        // hapus student
        $student->delete();

        // redirect = arahkan ke student index
        return redirect('/admin/student')->with('pesan', 'Berhasil Menghapus Data.');
    }
}
