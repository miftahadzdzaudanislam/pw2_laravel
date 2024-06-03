@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>Student</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active">Student</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <a href="student/create" class="btn btn-primary my-3">+ Student</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>NIM</th>
                            <th>Major</th>
                            <th>Class</th>
                            <th>Course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->nim }}</td>
                                <td>{{ $student->major }}</td>
                                <td>{{ $student->class }}</td>
                                <td>{!! $student->course->name ?? '<span class="badge rounded-pill bg-danger">Not Following Yet</span>' !!}</td>
                                <td class="d-flex">
                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning me-2">Edit</a>
                                    <form action="/admin/student/delete/{{ $student->id }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                    </form>
                                  </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>

    </div>
  </section>
@endsection