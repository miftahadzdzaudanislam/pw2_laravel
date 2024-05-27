@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>+ Student</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active">+ Student</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <form action="/admin/student/create" method="post" class="mt-3">
                {{-- Cross-Site Request Forgery -> Token/Pengaman form --}}
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="major" class="form-label">Major</label>
                    <select name="major" id="major" class="form-select">
                        <option value="">Select Major</option>
                        <option value="Computer Engineering">Computer Engineering</option>
                        <option value="Information Systems">Information Systems</option>
                        <option value="Digital Business">Digital Business</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label for="class" class="form-label">Class</label>
                    <input type="text" name="class" id="class" class="form-control">
                </div>

                <div class="mb-4">
                    <a href="/admin/student" class="btn btn-danger mr-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        </div>

    </div>
  </section>
@endsection