<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{ asset('admin/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">E-Shop Laravel</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/dashboard') ? 'active bg-gradient-primary' : '';}}" href="{{url('admin/dashboard')}}">           <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Research Section</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/research-categories') ? 'active bg-gradient-primary' : '';}}" href="{{url('admin/research-categories')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Research Categories</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/research') ? 'active bg-gradient-primary' : '';}}" href="{{url('admin/research')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Research</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Gallery Section</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/gallery') ? 'active bg-gradient-primary' : '';}}" href="{{url('admin/gallery')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Gallery</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/add-picture') ? 'active bg-gradient-primary' : '';}}" href="{{url('admin/add-picture')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Add Picture</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Website Section</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/downloads') ? 'active bg-gradient-primary' : '' || Request::is('admin/download-group') ? 'active bg-gradient-primary' : '' || Request::is('admin/view-document') ? 'active bg-gradient-primary' : '';}}" href="{{url('admin/downloads')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Downloads</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/seminar') ? 'active bg-gradient-primary' : '';}}" href="{{url('admin/seminar')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Seminar</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('admin/aboutus') ? 'active bg-gradient-primary' : '';}}" href="{{url('admin/aboutus')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">About US</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>

      </ul>
    </div>

  </aside>