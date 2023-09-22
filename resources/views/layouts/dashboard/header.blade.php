<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Warna - PLN Udiklat Padang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landing_page/img/resize.png') }}" rel="icon">
  <link href="{{ asset('landing_page/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing_page/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing_page/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing_page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing_page/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing_page/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing_page/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('landing_page/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Updated: Aug 25 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- fungsi aktif menu -->
  <style>
    .navbar .menu .navbar-item.active a {
    color: #e96b56; /* Warna merah */
  }
  </style>
  </head>
  <body>
    <section id="topbar" class="d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">udiklat.padang@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0751) 96768</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://instagram.com/pln.updl.padang" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://youtube.com/@updlpadang6399" class="youtube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </section>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo" >
          <!-- <h1><a href="index.html">Eterna</a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="{{ route('wlcm') }}"><img src="{{asset('assets/images/mockup2.1.png')}}" alt="" class="img-fluid"></a>
        </div>
        <nav id="navbar" class="navbar active">
          <ul class="menu">
            <li class="navbar-item {{ request()->is('/*') ? 'active' : '' }}"><a href="{{ route('wlcm') }}">Home</a></li>
            <li class="navbar-item {{ request()->is('about*') ? 'active' : '' }}"><a href="{{route('about.index')}}">About</a></li>
            <li class="navbar-item {{ request()->is('contact*') ? 'active' : '' }}"><a href="{{route('contact.index')}}">Hubungi Kami</a></li>
            <!-- <li class="navbar-item {{ request()->is('informasi-dashboard*') ? 'active' : '' }}"><a href="{{route('informasi.index')}}">Informasi</a></li> -->
            <li class="navbar-item {{ request()->is('informasi-dashboard*') ? 'active' : '' }}"><a href="{{route('soon.index')}}">Informasi</a></li>
            <!-- <li class="navbar-item {{ request()->is('komunitas*') ? 'active' : '' }}"><a href="{{route('komunitas.index')}}">Komunitas</a></li> -->
            <li class="navbar-item {{ request()->is('komunitas*') ? 'active' : '' }}"><a href="{{route('soon.index')}}">Komunitas</a></li>
            @if (Route::has('login'))
            <li class="nav-item dropdown">
              @auth
              <a href="{{ url('dashboard') }}" class="btn btn-outline-primary nav-link dropdown-toggle" data-bs-toggle="dropdown">
                {{ Auth::user()->name }}
                <i class="bi bi-chevron-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </ul>
            @else
            <a href="" class="dropdown">
              Login
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('login') }}">Login Sebagai Peserta</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.login') }}">Login Sebagai Admin</a></li>
              
            </ul>
            @endauth
          </li>
          @endif
          <li class="navbar-item"><a href=""></a></li>
        </ul>        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  <main class="py-4">
    @yield('content')
  </main>
  @extends('layouts.dashboard.footer')
  <!-- Vendor JS Files -->
  <script src="{{ asset('landing_page/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('landing_page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing_page/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landing_page/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('landing_page/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('landing_page/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('landing_page/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('landing_page/js/main.js') }}"></script>
  <!-- fungsi aktif menu -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function () {
          $(".navbar-item a").click(function () {
              // Hapus kelas 'active' dari semua elemen menu
              $(".navbar-item").removeClass("active");

              // Tambahkan kelas 'active' pada elemen menu yang diklik
              $(this).parent().addClass("active");
          });
      });
  </script>

</body>
</html>