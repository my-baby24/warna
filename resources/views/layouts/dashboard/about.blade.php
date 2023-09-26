@extends('layouts.dashboard.header')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('wlcm')}}">Home</a></li>
          <li>About Us</li>
        </ol>
        <h2>About Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
          <div>
            <iframe class="mb-4 mb-lg-0" src="https://www.youtube.com/embed/_pSJxARxImY?autoplay=1&mute=1" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
            <a href="https://www.youtube.com/embed/_pSJxARxImY" class="watch-now-button">Watch Now</a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Profile Perusahaan</h3>
            <h5><p class="fst-italic">
            VISI
            </p></h5>
            <p>
            Menjadi Perusahaan Listrik Terkemuka se-Asia Tenggara dan #1 Pilihan Pelanggan untuk Solusi Energi.
            </p>

            <h5><p class="fst-italic">
            MISI
            </p></h5>
            <ul>
              <li><i class="bi bi-check-circle"></i> Menjalankan bisnis kelistrikan dan bidang lain yang terkait, berorientasi pada kepuasan pelanggan, anggota perusahaan dan pemegang saham.</li>
              <li><i class="bi bi-check-circle"></i> Menjadikan tenaga listrik sebagai media untuk meningkatkan kualitas kehidupan masyarakat.</li>
              <li><i class="bi bi-check-circle"></i> Mengupayakan agar tenaga listrik menjadi pendorong kegiatan ekonomi.</li>
              <li><i class="bi bi-check-circle"></i> Menjalankan kegiatan usaha yang berwawasan lingkungan.</li>
            </ul>
            <p>
              <!-- Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum -->
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  @endsection