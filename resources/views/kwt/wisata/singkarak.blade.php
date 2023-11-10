<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Singkarak</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landing_page/img/resize.png') }}" rel="icon">
  <link href="{{ asset('landing_page/img/resize.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing_page/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing_page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">  

  <!-- Template Main CSS File -->
  
  <link href="{{ asset('kuliner/css/app.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('kuliner/css/slide.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  
  </head>
  <body>
    
    <div id="loading2" class="text-center">
        <div class="spinner-border" role="status"></div>
        <p>Loading...</p>
    </div>
    
        <section id="topbar" class="d-flex align-items-center">
          <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
              <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">udiklat.padang@gmail.com</a></i>
              <i class="bi bi-phone d-flex align-items-center ms-4"><span>(+62) 821-7278-5770</span></i>
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
              <a href="{{ route('wlcm') }}"><img src="{{asset('assets/images/mockup2.1.png')}}" alt="" class="img-fluid"></a>
            </div>
            <nav id="navbar" class="navbar active">
              <ul class="menu">
                <li class="navbar-item {{ request()->is('/*') ? 'active' : '' }}"><a href="{{ route('dashboardkuliner.index') }}">Kembali ke Beranda</a></li>
                
              <li class="navbar-item"><a href=""></a></li>
              <li class="navbar-item"><a href=""></a></li>
            </ul>        
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- .navbar -->
        </div>
      </header>
      
      
    
    <main class="py-4">
        @yield('content')
    </main>
    <script src="{{ asset('kuliner/js/main.js') }}"></script>  
    <script src="{{ asset('kuliner/js/slide.js') }}"></script>  
  </body>
</html>