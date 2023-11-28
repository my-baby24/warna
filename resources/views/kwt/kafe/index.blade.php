@extends('layouts.kwt.kafe.kafe')

@section('content')
<div class="container-fluid pr-5" style="background-color: #fff">
    <section id="hero" class="d-flex">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text-wrap text-center">
                        <h1 style="font-size: 36px; color: black;  margin-bottom: 10px; margin-top: 10rem; font-weight: 600">Ayo Memburu Aroma dan Kenikmatan Bersama Kami!</h1>
                        <p style="font-size: 14px">Selamat datang di Warna Temukan keindahan dan tempat tongkrongan yang nyaman, 
                            dan nikmati suasana cafe yang memesona di yang berada dikota padang
                            Setiap hidangan dan secangkir kopi adalah perjalanan rasa yang tak terlupakan.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="text-center">
                        <img src="{{ asset('kuliner/images/DATA_CAFFE/Lighthouse_padang_3.jpg')}}" style="max-width: 100%; height: auto;" class="img-fluid data-cafe" alt="Cafe 1">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{{-- bagian 2 --}}
{{-- <div class="container-fluid cafe-2">
    
</div> --}}

{{-- bagian 3 --}}
{{-- <div class="slider">
    <div class="slide-cafe">
      <h3>slide one</h3>
    </div>
    <div class="slide-cafe">
      <h3>slide two</h3>
    </div>
    <div class="slide-cafe">
      <h3>slide three</h3>
    </div>
    <div class="slide-cafe">
      <h3>slide four</h3>
    </div>
  </div> --}}

  <!-- Pastikan Anda memuat jQuery -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<!-- Memuat Flickity Library -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script> --}}

<!-- Kemudian, letakkan kode Anda -->
{{-- <script>
  $(document).ready(function() {
    $('.slider').flickity({
      // options
      cellAlign: 'left',
      contain: true,
      autoPlay: true,
      freeScroll: true,
      selectedAttraction: 0.2,
      friction: 0.8
    });
  });
</script> --}}

{{-- bagian 4 --}}
<base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/">
<div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="hobbiton-lake.jpg" alt>
			<figcaption>Hobbiton, New Zealand</figcaption>
		</figure>
		<figure>
			<img src="wanaka-drowned-tree.jpg" alt>
			<figcaption>Wanaka, New Zealand</figcaption>
		</figure>
		<figure>
			<img src="utah-peak.jpg" alt>
			<figcaption>Utah, United States</figcaption>
		</figure>
		<figure>
			<img src="bryce-canyon-utah.jpg" alt>
			<figcaption>Bryce Canyon, Utah, United States</figcaption>
		</figure>
		<figure>
			<img src="hobbiton-lake.jpg" alt>
			<figcaption>Hobbiton, New Zealand</figcaption>
		</figure>
	</figure>
</div>

@endsection
