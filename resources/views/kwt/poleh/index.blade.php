<!-- IKO UNTUAK TAMPILAN GAMBAR GAMBAR E MAH -->
@extends('layouts.kwt.poleh.poleh')
@section('content')

    <style>
        .custom-margin {
            margin-top: 50px; /* Sesuaikan dengan jarak yang diinginkan */
        }
    </style>
    
    <style>
        @keyframes fadeInOut {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }

        .fade-in-out {
            animation: fadeInOut 4s infinite; /* Sesuaikan durasi animasi sesuai keinginan */
        }

        /* ini tampilan tulisan modal */
        .article-text {
            font-size: 16px; /* Sesuaikan ukuran font */
            line-height: 1.6; /* Sesuaikan tinggi baris */
            text-align: justify;
        }

        .article-text img {
            max-width: 100%;
            height: auto;
        }

        /* ini untuk tampilan tombol tutup modal */
        .modal-footer button.btn-secondary { 
            background-color: black; /* Warna latar belakang awal */
            color: white; /* Warna teks awal */
        }
    
        .modal-footer button.btn-secondary:hover {
            background-color: white; /* Warna latar belakang saat dihover */
            color: black; /* Warna teks saat dihover */
        }

    </style>

<style>
    #heros {
        background-image: url('{{ asset('kuliner/images/DATA_OLEH/Dashboard_POO/poleholeh.jpg') }}');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-family: Arial, sans-serif;
        text-align: center;
        margin-bottom: 10px; /* Sesuaikan jarak antara hero dan menu kuliner */
    }

    #heros h1 {
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    #heros p {
        font-size: 1.5em;
        margin-bottom: 30px;
    }

    /* Styling tambahan dapat ditambahkan di sini */
</style>

    

<!-- <section id="hero">
    <div class="container mt-0">
        <div class="container-fluid mb-7">
            <div class="row">
                <div class="col-md-5">
                    <h2>Pusat Oleh-Oleh</h2>
                    <h5>Cari Oleh-Oleh Spesial Anda di sini untuk Kenangan yang Manis</h5>
                </div>
                <div class="col-md-100">
                  <img src="{{ asset('kuliner/images/DATA_OLEH/Dashboard_POO/poleholeh.jpg')}}" class="img-fluid" width=100%; height=100%; alt="kuliner">
                  
                </div>
            </div>
        </div>
    </div>
</section> -->

<div id="heros">
    <!-- Konten di dalam heros bisa Anda tambahkan sesuai kebutuhan -->
</div>



<div class=" kuliner-menu">
    <div class="container text-center pt-5 pb-3">
        <h1 class="fade-in-out">DAFTAR PUSAT OLEH-OLEH TERENAK SEKITAR UPDL PADANG</h1>
    </div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-2 mb-3">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
            
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/DATA_OLEH/DATA/christinehakim.jpg') }}" alt="christinehakim" class="img-fluid"><p>
                        <h6 class="card-title"><b>Christine Hakim</b></h6>
                        <p style="text-align: left;">Jl. Khatib Sulaiman No.99, Ulak Karang Sel., Kec. Padang Utara, Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalchristinehakim" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/DATA_OLEH/DATA/kripikshirley.jpg') }}" alt="christinehakim" class="img-fluid"><p>
                        <h6 class="card-title"><b>Kripik Shirley</b></h6>
                        <p style="text-align: left;">Jl. Khatib Sulaiman No.99, Ulak Karang Sel., Kec. Padang Utara, Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalkripikshirley" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/DATA_OLEH/DATA/minangsepakat.jpg') }}" alt="minangsepakat" class="img-fluid"><p>
                        <h6 class="card-title"><b>Minang Sepakat</b></h6>
                        <p style="text-align: left;">Jl. Khatib Sulaiman No.99, Ulak Karang Sel., Kec. Padang Utara, Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalminangsepakat" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/DATA_OLEH/DATA/silungkangartcenter.jpg') }}" alt="silungkangartcenter" class="img-fluid"><p>
                        <h6 class="card-title"><b>Silungkang Center</b></h6>
                        <p style="text-align: left;">Jl. Khatib Sulaiman No.99, Ulak Karang Sel., Kec. Padang Utara, Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalsilungkangartcenter" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-2 mb-3">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
            
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/DATA_OLEH/DATA/ummiaufahakim.jpg') }}" alt="silungkangartcenter" class="img-fluid"><p>
                        <h6 class="card-title"><b>Ummi Aufahakim</b></h6>
                        <p style="text-align: left;">Jl. Khatib Sulaiman No.99, Ulak Karang Sel., Kec. Padang Utara, Kota Padang</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalummiaufahakim" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal christinehakim -->
<div class="modal fade" id="modalchristinehakim" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>PUSAT OLEH OLEH</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselchristinehakim" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak4.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselchristinehakim" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselchristinehakim" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Christine Hakim"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.316673260722!2d100.34875926998347!3d-0.9085833332760996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b90b8d6e7df5%3A0xf20fc6f22d8f2fc4!2sRM%20Lamun%20Ombak!5e0!3m2!1sid!2sid!4v1701073480892!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal kripikshirley -->
<div class="modal fade" id="modalkripikshirley" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>PUSAT OLEH OLEH</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselkripikshirley" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak4.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Christine Hakim"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.316673260722!2d100.34875926998347!3d-0.9085833332760996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b90b8d6e7df5%3A0xf20fc6f22d8f2fc4!2sRM%20Lamun%20Ombak!5e0!3m2!1sid!2sid!4v1701073480892!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal minangsepakat -->
<div class="modal fade" id="modalminangsepakat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>PUSAT OLEH OLEH</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak4.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Christine Hakim"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.316673260722!2d100.34875926998347!3d-0.9085833332760996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b90b8d6e7df5%3A0xf20fc6f22d8f2fc4!2sRM%20Lamun%20Ombak!5e0!3m2!1sid!2sid!4v1701073480892!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal silungkangartcenter -->
<div class="modal fade" id="modalsilungkangartcenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>PUSAT OLEH OLEH</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak4.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Christine Hakim"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.316673260722!2d100.34875926998347!3d-0.9085833332760996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b90b8d6e7df5%3A0xf20fc6f22d8f2fc4!2sRM%20Lamun%20Ombak!5e0!3m2!1sid!2sid!4v1701073480892!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal ummiaufahakim -->
<div class="modal fade" id="modalummiaufahakim" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>PUSAT OLEH OLEH</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak2.jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak3.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/lamunombak4.jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Christine Hakim"</b></h2>
                            </p>
                            <p class="article-text">
                            Ada beberapa hal yang bisa anda dapatkan :
                            <ul>
                                <li>Menu Bervariasi</li>
                                <li>Tempat yang Indah</li>
                                <li>Tempat Makan Populer</li>
                            </ul>
                        </p>
                        </div>
                    </div>

                    <h5><b><i class="fas fa-map-marker-alt text-danger"></i> LOKASI TEMPAT</b></h5>

                    <!-- Peta Statis -->
                    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.316673260722!2d100.34875926998347!3d-0.9085833332760996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b90b8d6e7df5%3A0xf20fc6f22d8f2fc4!2sRM%20Lamun%20Ombak!5e0!3m2!1sid!2sid!4v1701073480892!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    

@endsection
