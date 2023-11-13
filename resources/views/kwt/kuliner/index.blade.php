@extends('layouts.kwt.kuliner.kuliner')
@section('content')
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
@endsection