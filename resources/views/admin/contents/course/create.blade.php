@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>+ Course</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active">+ Course</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body py-3">
            <form action="/admin/course/create" method="post" class="mt-3">
                {{-- Cross-Site Request Forgery -> Token/Pengaman form --}}
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" name="category" id="category" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="desc" class="form-label">Descripsi</label>
                    <input type="text" name="desc" id="desc" class="form-control">
                </div>

                <div class="mb-4">
                    <a href="/admin/course" class="btn btn-danger mr-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        </div>

    </div>
  </section>
@endsection