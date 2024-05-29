@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>Course</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active">Course</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <a href="course/create" class="btn btn-primary my-3">+ Course</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Desc</th>
                            <th>timestamp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->category }}</td>
                                <td>{{ $course->desc }}</td>
                                <td>{{ $course->created_at }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning me-2">Edit</a>
                                    <form action="/admin/course/delete/{{ $course->id }}" method="POST">
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