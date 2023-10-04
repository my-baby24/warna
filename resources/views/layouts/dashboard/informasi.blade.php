@extends('layouts.dashboard.header')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('wlcm')}}">Beranda</a></li>
          <li>Informasi</li>
        </ol>
        <h2>Informasi</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                @foreach($informasis as $informasi)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('storage/' . str_replace('public/', '', $informasi->foto)) }}"
                            class="img-fluid equal-height" alt="{{ $informasi->judul }}">
                        <div class="portfolio-info">
                            <h4>{{ $informasi->judul }}</h4>
                            <p>{{ $informasi->keterangan }}</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('storage/' . str_replace('public/', '', $informasi->foto)) }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="{{ $informasi->judul }}"><i class="bx bx-plus"></i></a>
                                <a href="{{ route('informasi-details.show', ['id' => $informasi->id]) }}" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Hallo</h2>
          <p>Lihatlah semua informasi yang ingin anda cari tahu.</p>
        </div>


      </div>
    </section>
    <!-- End Clients Section -->

  </main><!-- End #main -->
  @endsection