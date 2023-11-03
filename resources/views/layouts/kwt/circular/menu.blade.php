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
  <link href="{{ asset('landing_page/img/resize.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing_page/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing_page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing_page/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">  

  <!-- Template Main CSS File -->
  
  <link href="{{ asset('kuliner/css/app.css') }}" rel="stylesheet">

  <!-- fungsi aktif menu -->
  <style>
    .navbar .menu .navbar-item.active a {
    color: #00A2B9; 
  }
  </style>
  </head>
  <body>
        <div class="menu-circular">
        <input type="checkbox" id="toggle" />
        <label id="show-menu" for="toggle">
            <div class="btn">
            <i class="material-icons md-36 toggleBtn menuBtn">menu</i>
            <i class="material-icons md-36 toggleBtn closeBtn">close</i>
            </div>
            <div class="btn">
              <a href="{{ route('wisata') }}">
                <img src="{{ asset('kuliner/images/icon-menu/1.png') }}" alt="icon wisata" class="material-icons md-36 img-fluid">
              </a>
            </div>
            <div class="btn">
              <a href="">
                <img src="{{ asset('kuliner/images/icon-menu/2.png') }}" alt="icon Kuliner" class="material-icons md-36 img-fluid">
              </a>
              </div>
            <div class="btn">
              <a href="{{ route('kafe') }}">
                <img src="{{ asset('kuliner/images/icon-menu/3.png') }}" alt="icon Cafe" class="material-icons md-36 img-fluid">
              </a>
              </div>
            <div class="btn">
              <a href="{{route('hotel')}}">
                <img src="{{ asset('kuliner/images/icon-menu/4.png') }}" alt="icon Hotel" class="material-icons md-36 img-fluid">
              </a>
              </div>
            <div class="btn">
              <a href="{{route('transportasi')}}">
                <img src="{{ asset('kuliner/images/icon-menu/5.png') }}" alt="icon transportasi" class="material-icons md-36 img-fluid">
              </a>
              </div>
            <div class="btn">
              <a href="{{ route('poleh') }}">
                <img src="{{ asset('kuliner/images/icon-menu/6.png') }}" alt="icon oleh" class="material-icons md-36 img-fluid">
              </a>
              </div>
        </label>
        </div>
        
        <script src="{{ asset('kuliner/js/main.js') }}"></script>
  </body>
</html>