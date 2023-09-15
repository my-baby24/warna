<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Warna - Udiklat Padang</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

        <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
        .active-menu {
            background-color: #fff000;
            border-radius: 10px; /* Adjust the radius as needed */
            padding: 10px;
        }
        .sidebar-item.active-menu{
            background-color: #fff000;
            border-radius: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Get the current URL
            var currentURL = window.location.href;

            // Loop through each menu item and compare its href with the current URL
            $('.sidebar-item a').each(function() {
                var menuItemURL = $(this).attr('href');
                if (currentURL.includes(menuItemURL)) {
                    $(this).addClass('active-menu');
                    $(this).closest('.sidebar-item').addClass('active-menu');
                }
            });
        });
    </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="#"><img src="{{asset('assets/images/mockup2.1.png')}}" alt="Logo" srcset="" style="width: 5rem; height: auto;"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="{{route('dashboard')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span class="small">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{route('uip.viewindex')}}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span class="text-truncate small">Informasi Pembelajaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('udh.index') }}" class='sidebar-link'>
                                <i class="bi-person-fill"></i>
                                <span class="text-truncate small">Konfirmasi Kehadiran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('absensi.store')}}" class='sidebar-link'>
                                <i class="bi-person-check-fill"></i>
                                <span class="text-truncate small">Daftar Hadir</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span class="small">Check-in Penginapan</span>
                            </a>
                           
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span class="small">Sarana dan Prasarana</span>
                            </a>
                            
                        </li>

                        <li class="sidebar-item  ">
                            <a href="form-layout.html" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span class="small">Kuliner, Wisata dan Transportasi</span>
                            </a>
                        </li>
                        
                    </ul>
                    
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3">
                    </i>
                </a>
                
            </header>
           
           
            <main class="py-4">
                @yield('content')
            </main>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>IT PLN Udiklat Padang 2023</p>
                    </div>
                    <div class="float-end">
                        <span class="text-danger"><i class="bi bi-heart"></i></span><span style="padding-left: 3px;">Version 1.0</a>
                    </div>
                </div>
            </footer>
        </div>
        
    </div>
        </div>
        <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
