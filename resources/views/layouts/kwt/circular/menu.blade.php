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
  #loading2 {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.7); /* Latar belakang semi-transparan */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; /* Atur z-index untuk menempatkan elemen loading di atas konten lain */
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
            <i class="material-icons md-36">photo_camera</i>
            </div>
            <div class="btn">
            <i class="material-icons md-36">photo</i>
            </div>
            <div class="btn">
            <i class="material-icons md-36">music_note</i>
            </div>
            <div class="btn">
            <i class="material-icons md-36">chat_bubble</i>
            </div>
            <div class="btn">
            <i class="material-icons md-36">settings</i>
            </div>
            <div class="btn">
            <i class="material-icons md-36">phone</i>
            </div>
        </label>
        </div>
<script src="{{ asset('kuliner/js/main.js') }}"></script>
  </body>
</html>