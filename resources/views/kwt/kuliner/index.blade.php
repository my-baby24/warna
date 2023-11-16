@extends('layouts.kwt.kuliner.kuliner')
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
    </style>

<section id="hero">
    <div class="container mt-0">
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-5">
                    <h2>TEMUKAN SELERAMU</h2>
                    <h5>DIRUMAH MAKAN PADANG</h5>
                </div>
                <div class="col-md-7">
                  <img src="{{ asset('kuliner/images/kuliner/6.png')}}" class="img-fluid" alt="kuliner">
                </div>
            </div>
        </div>
    </div>
</section>

<div class=" kuliner-menu">
    <div class="container text-center pt-5 pb-3">
        <h5>MAKANAN KHAS PADANG</h5>
    </div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/lontong-gulai.png') }}" alt="lontong gulai" class="img-fluid">
                        <h6 class="card-title">LONTONG GULAI</h6>
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/dendeng-balado.png') }}" alt="dendeng balado" class="img-fluid">
                        <h6 class="card-title">DENDENG BALADO</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/itiak-balado.png') }}" alt="itiak balado" class="img-fluid">
                        <h6 class="card-title">ITIAK LADO HIJAU</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/6.png') }}" alt="rendang" class="img-fluid">
                        <h6 class="card-title">RENDANG</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/ikan-pangek.png') }}" alt="ikan pangek" class="img-fluid">
                        <h6 class="card-title">IKAN PANGEK ASIN</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/sate-padang.png') }}" alt="sate padang" class="img-fluid">
                        <h6 class="card-title">SATE PADANG</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr style="border-top: 2px solid black;"></hr>

<div class=" kuliner-menu">
    <div class="container text-center pt-5 pb-3">
        <h3><marquee behavior="scroll" direction="left">AYO BURUAN KUNJUNGI!</marquee></h3>
        <h1 class="fade-in-out">DAFTAR RUMAH MAKAN TERBAIK SEKITAR UPDL PADANG</h1>
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
                        <img src="{{ asset('kuliner/images/kuliner/lamunombak.jpg') }}" alt="dendeng balado" class="img-fluid"><p>
                        <h6 class="card-title">LAMUN OMBAK</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/banun.jpg') }}" alt="itiak balado" class="img-fluid"><p>
                        <h6 class="card-title">RM UPIAK BANUN</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/fuja.jpg') }}" alt="rendang" class="img-fluid"><p>
                        <h6 class="card-title">RM FUJA</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/piaman.jpg') }}" alt="ikan pangek" class="img-fluid"><p>
                        <h6 class="card-title">RM PAUH PIAMAN</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
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
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/bungsu.jpg') }}" alt="ikan pangek" class="img-fluid"><p>
                        <h6 class="card-title">PONDOK NASI SI BUNGSU</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/naimah.jpg') }}" alt="ikan pangek" class="img-fluid"><p>
                        <h6 class="card-title">KATUPEK GULAI TUNJANG NAIMAH</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/malabar.jpg') }}" alt="ikan pangek" class="img-fluid"><p>
                        <h6 class="card-title">MARTABAK MALABAR ARHAM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/devi.jpg') }}" alt="ikan pangek" class="img-fluid"><p>
                        <h6 class="card-title">PONDOK MAKAN DEVI SPECIAL SEAFOOD</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
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
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/apuak.jpg') }}" alt="ikan pangek" class="img-fluid"><p>
                        <h6 class="card-title">RM MAK APUAK</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/appolo.jpg') }}" alt="ikan pangek" class="img-fluid"><p>
                        <h6 class="card-title">APOLLO SEAFOOD</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/djoni.jpg') }}" alt="ikan pangek" class="img-fluid"><p>
                        <h6 class="card-title">IKAN BAKAR DJONI/KUN</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3 custom-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('kuliner/images/kuliner/ikan-pangek.png') }}" alt="ikan pangek" class="img-fluid">
                        <h6 class="card-title">ARIE RESTO</h6>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="" class="btn-gradient cyan small">Cek Selengkapnya !</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mb-3">
                <div class="#">
                    <div class="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection