@extends('layouts.kwt.kafe.kafe')

@section('content')
<div class="container-fluid" style="background-color: #fff">
    <section id="hero" class="d-flex rellax"data-rellax-speed="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text-wrap text-center">
                        <h1 style="font-size: 36px; color: black;  margin-bottom: 10px; margin-top: 8rem; font-weight: 600">Ayo Memburu Aroma dan Kenikmatan Bersama Kami!</h1>
                        <p style="font-size: 14px">Selamat datang di Warna Temukan keindahan dan tempat tongkrongan yang nyaman, 
                            dan nikmati suasana cafe yang memesona di yang berada dikota padang
                            Setiap hidangan dan secangkir kopi adalah perjalanan rasa yang tak terlupakan.</p>
                            <a href="#menu-cafe" class="btn-gradient cyan small">Cek Selengkapnya <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="text-center">
                        <img src="{{ asset('kuliner/images/DATA_CAFFE/Lighthouse_padang_3.jpg')}}" style="max-width: 100%; height: auto;" class="img-fluid data-cafe hidden-mobile" alt="Cafe 1">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- bagian 4 --}}
<div id="captioned-gallery" class="rellax" data-rellax-speed="-1.5">
	<figure class="slider">
		<figure>
			<img src="{{ asset('kuliner/images/DATA_CAFFE/lighthouse.jpg')}}" alt>
			<figcaption>Ayo Memburu Aroma, dan Kenikmatan Bersama Kami</figcaption>
		</figure>
		<figure>
			<img src="{{ asset('kuliner/images/DATA_CAFFE/Lighthouse padang (1).jpg')}}" alt>
			<figcaption>Nama Cafe, Lokasi Daerah</figcaption>
		</figure>
		<figure>
			<img src="{{ asset('kuliner/images/DATA_CAFFE/Parewa.jpg')}}" alt>
			<figcaption>Nama Cafe, Lokasi Daerah</figcaption>
		</figure>
		<figure>
			<img src="{{ asset('kuliner/images/DATA_CAFFE/safari Garden.jpg')}}" alt>
			<figcaption>Nama Cafe, Lokasi Daerah</figcaption>
		</figure>
		<figure>
			<img src="{{ asset('kuliner/images/DATA_CAFFE/lighthouse.jpg')}}" alt>
			<figcaption>Ayo Memburu Aroma, dan Kenikmatan Bersama Kami</figcaption>
		</figure>
	</figure>
</div>

{{--  --}}
<div class=" cafe-menu mt-4 rellax" data-rellax-speed="1"" id="menu-cafe">
  {{-- <div class="container text-center pt-5 pb-3">
      <h5>MAKANAN KHAS PADANG</h5>
  </div>--}}
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
      <div class="row text-center">

      </div>
    </div>
  </div>

  <!-- Tambahkan skrip untuk Rellax.js -->
<script src="https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.min.js"></script>
<script>
  // Inisialisasi Rellax dengan selector dan opsi yang sesuai
  var rellax = new Rellax('.rellax', {
    speed: 1, 
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
  });
</script>


@endsection
