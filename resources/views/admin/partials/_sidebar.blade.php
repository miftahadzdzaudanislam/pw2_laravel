@php
    $currentRoute = Route::current()->uri;
@endphp
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if($currentRoute != 'admin/dashboard') collapsed @endif" href="/admin/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link @if($currentRoute != 'admin/student') collapsed @endif" href="/admin/student">
          <i class="bi bi-grid"></i>
          <span>Student</span>
        </a>
      </li>
    </ul>

  </aside>