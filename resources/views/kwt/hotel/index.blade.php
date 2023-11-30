@extends('layouts.kwt.hotel.hotel')
@section('content')

<div class="banner">
    <div id="captioned-gallery" class="hotel-bg">
        <div class="hotel-image"></div>
        <div class="container text-wrap">
            <h1 style="font-size: 36px; color: #fff;  margin-bottom: 10px; margin-top: 8rem; font-weight: 900">Ayo Cari Aroma dan Kenikmatan Bersama Kami!</h1>
            <p style="font-size: 14px">Selamat datang di Warna Temukan keindahan dan tempat tongkrongan yang nyaman, dan nikmati suasana cafe yang memesona di yang berada dikota padang Setiap hidangan dan secangkir kopi adalah perjalanan rasa yang tak terlupakan.</p>
            <a href="#menu-cafe" class="btn-gradient cyan small">Cek Selengkapnya &nbsp;<i class="bi bi-search"></i></a>
        </div>
    </div>
    <div class=" cafe-menu mt-4 mb-0" id="menu-cafe">
        <div class="container-fluid"> 
            <div class="row text-center">
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_CAFFE/Lighthouse padang (2).jpg') }}" alt="lighthouse padang" class="img-fluid">
                            <h6 class="card-title">Lighthouse Padang</h6>
                            {{-- <p>Jl. Padang - Bengkulu, Tlk. Bayur, Kec. Padang Sel., Kota Padang, Sumatera Barat</p> --}}
                            <a href="#" data-bs-toggle="modal" data-bs-target="#" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_CAFFE/kinol.jpg') }}" alt="kuali nyonya" class="img-fluid">
                            <h6 class="card-title">Kuali Nyonya</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalDendengBalado" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_CAFFE/Parewa.jpg') }}" alt="parewa" class="img-fluid">
                            <h6 class="card-title">Parewa Bandar Purus</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalItiakLadoHijau" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_CAFFE/kinol.jpg') }}" alt="kinol" class="img-fluid">
                            <h6 class="card-title">Caffe Kinol</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalRendang" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row text-center">
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_CAFFE/xakapa cafe.jpg') }}" alt="ikan xakapa" class="img-fluid">
                            <h6 class="card-title">Xakapa</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalIkanPangekAsin" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_CAFFE/iibumi cafe.jpg') }}" alt="iibumi" class="img-fluid">
                            <h6 class="card-title">IIBumi</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalSatePadang" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                  <div class="card">
                      <div class="card-body">
                          <img src="{{ asset('kuliner/images/DATA_CAFFE/ballad-beach-cafe.jpg') }}" alt="iibumi" class="img-fluid">
                          <h6 class="card-title">Ballad Beach Aie Manih</h6>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalSatePadang" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                      </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('kuliner/images/DATA_CAFFE/iibumi cafe.jpg') }}" alt="iibumi" class="img-fluid">
                            <h6 class="card-title">IIBumi</h6>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalSatePadang" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="hotel">
        <div class="container">
            <div 
                class="slide-hotel" 
                style="background-image: url(https://images.unsplash.com/photo-1561234311-a9e16fa60b25?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)"
            >
                <h3>United Kingdom</h3>
            </div>
            <div 
                class="slide-hotel" 
                style="background-image: url(https://images.unsplash.com/photo-1504109586057-7a2ae83d1338?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1933&q=80)"
            >
                <h3>Japan</h3>
            </div>
            <div 
                class="slide-hotel active-hotel" 
                style="background-image: url(https://images.unsplash.com/photo-1620562423895-ad4924643d43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80)"
            >
                <h3>Switzeland</h3>
            </div>
            <div 
                class="slide-hotel" 
                style="background-image: url(https://images.unsplash.com/photo-1547448415-e9f5b28e570d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)"
            >
                <h3>Russia</h3>
            </div>
            <div
                class="slide-hotel" 
                style="background-image: url(https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1530&q=80)"
            >
                <h3>Australia</h3>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let slides = document.querySelectorAll('.slide-hotel');

        slides.forEach((slide) => {
            slide.addEventListener('click', () => {
                clearActiveClasses();
                slide.classList.add('active-hotel');
            });
        });

        function clearActiveClasses() {
            slides.forEach((slide) => {
                slide.classList.remove('active-hotel');
            });
        }
    });
</script>
@endsection