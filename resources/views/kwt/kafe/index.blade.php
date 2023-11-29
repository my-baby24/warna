@extends('layouts.kwt.kafe.kafe')
@section('content')

<div class="container-fluid" style="background-color: #fff">
    <section id="hero" class="d-flex rellax"data-rellax-speed="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text-wrap text-center">
                        <h1 style="font-size: 36px; color: black;  margin-bottom: 10px; margin-top: 8rem; font-weight: 600">Ayo Cari Aroma dan Kenikmatan Bersama Kami!</h1>
                        <p style="font-size: 14px">Selamat datang di Warna Temukan keindahan dan tempat tongkrongan yang nyaman, 
                            dan nikmati suasana cafe yang memesona di yang berada dikota padang
                            Setiap hidangan dan secangkir kopi adalah perjalanan rasa yang tak terlupakan.</p>
                            <a href="#menu-cafe" class="btn-gradient cyan small">Cek Selengkapnya &nbsp;<i class="bi bi-search"></i></a>
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
			<figcaption>Lighthouse, Kota Padang</figcaption>
		</figure>
		<figure>
			<img src="{{ asset('kuliner/images/DATA_CAFFE/Parewa.jpg')}}" alt>
			<figcaption>Parewa, Kota Padang</figcaption>
		</figure>
		<figure>
			<img src="{{ asset('kuliner/images/DATA_CAFFE/safari Garden.jpg')}}" alt>
			<figcaption>Safari Garden, Kota Padang</figcaption>
		</figure>
		<figure>
			<img src="{{ asset('kuliner/images/DATA_CAFFE/lighthouse.jpg')}}" alt>
			<figcaption>Ayo Memburu Aroma, dan Kenikmatan Bersama Kami</figcaption>
		</figure>
	</figure>
</div>

{{--  --}}
<div class=" cafe-menu mt-4 rellax" data-rellax-speed="1" id="menu-cafe">
  <div class="container-fluid"> 
      <div class="row text-center">

          <div class="col-sm-3 mb-4">
              <div class="card">
                  <div class="card-body">
                      <img src="{{ asset('kuliner/images/kuliner/DATA_CAFFE/lighthouse.jpg') }}" alt="lighthouse padang" class="img-fluid">
                      <h6 class="card-title">Lighthouse Padang</h6>
                      {{-- <p>Jl. Padang - Bengkulu, Tlk. Bayur, Kec. Padang Sel., Kota Padang, Sumatera Barat</p> --}}
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalLighthouse" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                  </div>
              </div>
          </div>

          <div class="col-sm-3 mb-4">
              <div class="card">
                  <div class="card-body">
                      <img src="{{ asset('kuliner/images/kuliner/DATA_CAFFE/xakapa.jpg') }}" alt="kuali nyonya" class="img-fluid">
                      <h6 class="card-title">Xakapa</h6>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalXakapa" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                  </div>
              </div>
          </div>
          <div class="col-sm-3 mb-4">
              <div class="card">
                  <div class="card-body">
                      <img src="{{ asset('kuliner/images/kuliner/DATA_CAFFE/iibumi.jpg') }}" alt="parewa" class="img-fluid">
                      <h6 class="card-title">IIbumi</h6>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalIIbumi" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                  </div>
              </div>
          </div>

          <div class="col-sm-3 mb-4">
              <div class="card">
                  <div class="card-body">
                      <img src="{{ asset('kuliner/images/kuliner/DATA_CAFFE/balladbeach.jpg') }}" alt="kinol" class="img-fluid">
                      <h6 class="card-title">Ballad Beach Aie Manih</h6>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalBallad" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                  </div>
              </div>
          </div>
          <div class="col-sm-3 mb-4">
              <div class="card">
                  <div class="card-body">
                      <img src="{{ asset('kuliner/images/kuliner/DATA_CAFFE/parewa.jpg') }}" alt="ikan xakapa" class="img-fluid">
                      <h6 class="card-title">Parewa bandar purus</h6>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalParewa" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                  </div>
              </div>
          </div>
          <div class="col-sm-3 mb-4">
              <div class="card">
                  <div class="card-body">
                      <img src="{{ asset('kuliner/images/kuliner/DATA_CAFFE/kinol.jpg') }}" alt="iibumi" class="img-fluid">
                      <h6 class="card-title">Caffe Kinol</h6>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modalKinol" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                  </div>
              </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('kuliner/images/kuliner/DATA_CAFFE/kualinyonya.jpg') }}" alt="iibumi" class="img-fluid">
                    <h6 class="card-title">Kuali Nyonya</h6>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalKuali" class="btn-gradient cyan small mb-2">Cek Selengkapnya !</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-4">
          <div class="card">
              <div class="card-body">
                  <img src="{{ asset('kuliner/images/kuliner/DATA_CAFFE/iibumi.jpg') }}" alt="iibumi" class="img-fluid">
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

  <!-- Modal Lighthouse -->
  <div class="modal fade" id="modalLighthouse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselLighthouse" class="carousel slide mb-4" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/lighthouse.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/lighthouse (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/lighthouse (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/lighthouse (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselLighthouse" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselLighthouse" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <h2><b>"Lighthouse"</b></h2>
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

    <!-- Modal Xakapa -->
    <div class="modal fade" id="modalXakapa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="carouselXakapa" class="carousel slide mb-4" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/xakapa.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/xakapa (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/xakapa (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/xakapa (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselXakapa" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselXakapa" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <h2><b>"Xakapa"</b></h2>
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

        <!-- Modal Iibumi -->
        <div class="modal fade" id="modalIibumi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="carouselIibumi" class="carousel slide mb-4" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/iibumi.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/iibumi (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/iibumi (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/iibumi (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIibumi" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselIibumi" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <h2><b>"Iibumi"</b></h2>
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

            <!-- Modal Ballad Beach -->
            <div class="modal fade" id="modalBallad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="carouselBallad class="carousel slide mb-4" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/balladbeach.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/balladbeach (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/balladbeach (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/balladbeach (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBallad" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselBallad" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <h2><b>"Ballad Beach"</b></h2>
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

                <!-- Modal Parewa -->
                <div class="modal fade" id="modalParewa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="carouselParewa" class="carousel slide mb-4" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/parewabandarpurus.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/parewabandarpurus (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/parewabandarpurus (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/parewabandarpurus (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselParewa" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselParewa" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <h2><b>"Parewa"</b></h2>
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

                    <!-- Modal Kinol -->
                    <div class="modal fade" id="modalKinol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div id="carouselKinol" class="carousel slide mb-4" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/kinolcafe.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/kinolcafe (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/kinolcafe (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/kinolcafe (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselKinol" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselKinol" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    <h2><b>"Caffe Kinol"</b></h2>
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

                        <!-- Modal Kuali -->
                        <div class="modal fade" id="modalKuali" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><b>Cafetaria Buat Enjoy??</b></h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="carouselKuali" class="carousel slide mb-4" data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/kualinyonya.jpg') }}" class="d-block w-100" alt="Lamun Ombak 1">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/kualinyonya (2).jpg') }}" class="d-block w-100" alt="Lamun Ombak 2">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/kualinyonya (3).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="{{ asset('kuliner/images/kuliner/DETAIL_CAFFE/kualinyonya (4).jpg') }}" class="d-block w-100" alt="Lamun Ombak 3">
                                                            </div>
                                                        </div>
                                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselKuali" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselKuali" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <h2><b>"Kuali Nyonya"</b></h2>
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
