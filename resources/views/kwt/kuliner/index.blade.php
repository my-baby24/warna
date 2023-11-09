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
<div class=" kuliner-menu container">
    <h5>MAKANAN KHAS PADANG</h5>
    <div class="row">
        <div class="col-sm-2 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">LONTONG GULAI</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DENDENG BALADO</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ITIAK LADO HIJAU</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">RENDANG</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">IKAN PANGEK ASIN</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">SATE PADANG</h5>
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection