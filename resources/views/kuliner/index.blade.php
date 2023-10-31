@extends('layouts.kuliner.kuliner')

@section('content')
    <!-- ======= Featured Section ======= -->
    <section id="fitur" class="fitur">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="icon-box">
            <a href="{{ route('ip.index') }}">
              <!-- <i class="bi bi-card-checklist"></i> -->
              <img src="{{asset('assets/images/1.png')}}" alt="Icon 1" class="img-fluid mb-3" style="max-width: 60px;">
              <h3 class="text-dark">Informasi Pembelajaran</h3>
              <p>Lihat Informasi Pembelajaran Disini</p>
              </a>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="icon-box">
            <a href="{{route('soon.index')}}">
              <img src="{{asset('assets/images/3.png')}}" alt="Icon 2" class="img-fluid mb-3" style="max-width: 60px;">
              <h3 class="text-dark">Check-in Penginapan</h3>
              <h1 style="font-size: 35px; color: #000000; font-weight: bold;">Coming Soon!</h1>
            </a>
          </div>
        </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
            <a href="{{route('sarana.index')}}">
            <!-- <a href="{{route('soon.index')}}"> -->
              <!-- <i class="bi bi-binoculars"></i> -->
              <img src="{{asset('assets/images/4.png')}}" alt="Icon 3" class="img-fluid mb-3" style="max-width: 60px;">
              <h3 class="text-dark">Sarana dan Prasarana</h3>
              <p>Lihat Sarana & Prasarana Disini</p>
              </a>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
            <a href="{{ route('kuliner') }}">
              <!-- <i class="bi bi-binoculars"></i> -->
              <img src="{{asset('assets/images/5.png')}}" alt="Icon 4" class="img-fluid mb-3" style="max-width: 60px;">
              <h3 class="text-dark">Kuliner, Wisata dan Transportasi</h3>
              <p>Coba cari Makanan, Tempat, dan Transportasi di dekat Anda Disini</p>
              </a>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Featured Section -->
  

@endsection