<!-- IKO UNTUAK TAMPILAN GAMBAR GAMBAR E MAH -->
@extends('layouts.kwt.transportasi.transportasi')

@section('content')
<style>
    .dropdown {
  display: none;
  position: absolute;
  bottom: 50px;
  background-color: #fff;
  border: 1px solid #ccc;
  z-index: 1;
}

.dropdown.active {
  display: block;
}
.menu-transportasi .dropdown{
  margin-left: 20rem;
}
.menu-transportasi .card {
  position: relative;
  width: 100%;
  max-width: 50rem;
}
.menu-transportasi .dropdown .card .card-head {
  background-color: #00A2B9;
  width: 70%;
  height: 20px;
  position: static;
  /* margin-top: 20px; */
  padding: 0;
  padding-bottom: 25px;
  margin: 20px 0 0 0;
}
.menu-transportasi .card .card-head img{
  position: absolute;
  max-width: 5rem;
  top: 0;
  left: 0;
  margin-top: -10px;
}
.menu-transportasi .card .card-head h5{
  font-weight: 800;
  text-align: start;
  padding-left: 6rem;
  color: #fff;
}
.menu-transportasi .card .container {
  padding-left: 90px;
}
.menu-transportasi .card .container .card-body {
  /* text-align: center;
  justify-content: center; */
  position: relative;
  padding-top: 20px;
}

</style>
<div class="banner">
    <div id="captioned-gallery">
        <div class="transportasi-image"></div>
        <div class="container text-wrap">
            <h1 style=" text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); text-transform: uppercase;font-size: 36px; color: #fff;  margin-bottom: 10px; margin-top: 8rem; font-weight: 900">
                TRANSPORTASI
            </h1>
            <p style="font-size: 14px">Temukan Kendaraan Untuk Petualangan-mu.</p>
        </div>
    </div>
</div>
<div class="altmenu">
    <center>
      <ul>
        <!-- <li><a href="" data-target="plane"><i class="fas fa-plane"></i></a></li> -->
        <li><a href="" data-target="carmotor">
          <i class="fas fa-car"></i>
          <i class="fas fa-motorcycle"></i>
        </a></li>
        <li><a href="" data-target="car"><i class="fas fa-car"></i></a></li>
        <li><a href="" data-target="motorcycle"><i class="fas fa-motorcycle"></i></a></li>
        <li><a href="#" data-target="train"><i class="fas fa-train"></i></a></li>
      </ul>
      
    </center>
  </div>

  <!-- MENU MENU ICONNYA -->
<div class="menu-transportasi">

<!-- MENU PESAWAT -->
  <div class="dropdown" id="carmotor">
    <div class="card">
      <div class="card-head">
        <img src="{{asset('kuliner/images/DATA_TRANSPORTASI/1.png')}}" class="card-img-top" alt="icon travel">
        <h5 class="card-text">SEWA MOBIL DAN MOTOR</h5>
      </div>
     <div class="container"> 
      <div class="card-body">
        <div class="row">
        <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="card-body text-primary">
                            <h5 class="card-title">PT.MITRA MUDA SWARAS</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> KOMPLEK PARAK KARAKAH, ASRI BLOK C NO.2 KOTA, PADANG<br>
                                <!-- <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> Link Google Maps
                                </a> <br> -->
                                <i class="bi bi-whatsapp"></i> 08116683123
                            </p>
                        </div>
                    </div>
                    
                    <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="card-body text-primary">
                            <h5 class="card-title">PT.BRAYEN MOBILINDO WISATA</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> JL.BATANG ANTOKAN NO.5 GOR HAJI AGUS SALIM, KOTA PADANG <br>
                                <!-- <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> Link Google Maps
                                </a> <br> -->
                                <i class="bi bi-whatsapp"></i> 085355144668
                            </p>
                        </div>
                    </div>
        </div>
      </div>
    </div>
      
    </div>
  </div>

  <!-- MENU CAR -->
  <div class="dropdown" id="car">
    <div class="card">
        <div class="card-head">
            <img src="{{asset('kuliner/images/DATA_TRANSPORTASI/2.png')}}" class="card-img-top" alt="icon travel">
            <h5 class="card-text">Mobil</h5>
        </div>
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="bg-transparent">
                           
                        </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Armada Travel OKE</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> JL. M. YAMIN, AUR KUNING, KEC. AUR BIRUGO TIGO BALEH,KOTA BUKITTINGGI, SUMATERA BARAT 26131 <br>
                                <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> https://maps.app.goo.gl/FFXk8ToVPzsW86fy8
                                </a> <br>
                                <i class="bi bi-whatsapp"></i> 082383667733
                            </p>
                        </div>
                    </div>

                    <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="card-body text-primary">
                            <h5 class="card-title">Maestro Travel</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> JL. JAMBU AIR NO.45, TALUAK AMPEK SUKU, KEC. BANUHAMPU, KABUPATEN AGAM, SUMATERA BARAT 26181<br>
                                <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> https://maps.app.goo.gl/gudwhza2eeazmLGc9
                                </a> <br>
                                <i class="bi bi-whatsapp"></i> 085375733888
                            </p>
                        </div>
                    </div>

                    <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="card-body text-primary">
                            <h5 class="card-title">AWR Tour Travel</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> JL. BY PASS, TAROK DIPO, KEC. GUGUK PANJANG, KOTA BUKITTINGGI, SUMATERA BARAT 26181 <br>
                                <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> https://maps.app.goo.gl/q4UES9hPjJ5DdPko6
                                </a> <br>
                                <i class="bi bi-whatsapp"></i> (0752)625241
                            </p>
                        </div>
                    </div>

                    <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="card-body text-primary">
                            <h5 class="card-title">Erte Oke Travel</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> JL. JAMBU AIR NO.58B, TALUAK AMPEK SUKU, KEC. BANUHAMPU, KABUPATEN AGAM, SUMATERA BARAT 6181 <br>
                                <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> https://maps.app.goo.gl/naKTQGdn1gjqzynj8
                                </a> <br>
                                <i class="bi bi-whatsapp"></i> 085355161234
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

  <div class="dropdown" id="motorcycle">
  <div class="card">
      <div class="card-head">
        <img src="{{asset('kuliner/images/DATA_TRANSPORTASI/4.png')}}" class="card-img-top" alt="icon travel">
        <h5 class="card-text">OJEK LOKAL</h5>
      </div>
     <div class="container"> 
      <div class="card-body">
      <div class="row">
                    <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="bg-transparent">
                           
                        </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Pak Malin</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> Lubuk ALung, Padang Parimaan <br>
                                <a href="https://maps.google.com/" target="_blank">
                                </a>
                                <i class="bi bi-whatsapp"></i> 085364776592 <br>
                            </p>
                        </div>
                    </div>

                    <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="bg-transparent">
                           
                        </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Bang Nop</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> Lubuk ALung, Padang Parimaan <br>
                                <a href="https://maps.google.com/" target="_blank">
                                </a>
                                <i class="bi bi-whatsapp"></i> 083161958762 <br>
                            </p>
                        </div>
                    </div>

                    
                </div>
      </div>
    </div>
      
    </div>
  </div>
  <div class="dropdown" id="train">
    <div class="card">
      <div class="card-head">
        <img src="{{asset('kuliner/images/DATA_TRANSPORTASI/3.png')}}" class="card-img-top" alt="icon travel">
        <h5 class="card-text">STASIUN KERETA</h5>
      </div>
     <div class="container"> 
      <div class="card-body">
        <div class="row">
                    <div class="card border-primary mb-1" style="max-width: 40rem;">
                        <div class="bg-transparent">
                           
                        </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Stasiun BIM (Bandara)</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> KATAPIANG, KEC. BATANG ANAI, KABUPATEN PADANG PARIAMAN, SUMATERA BARAT <br>
                                <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> https://maps.app.goo.gl/4g9ZA5TioJRbroPY9
                                </a> <br>
                            </p>
                        </div>
                    </div>
                    <p>

                    <div class="card border-primary mb-1" style="max-width: 40rem;">
                        <div class="bg-transparent">
                           
                        </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Stasiun Lubuk Alung</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i>  LUBUK ALUNG, KEC. LUBUK ALUNG, KABUPATEN PADANG PARIAMAN, SUMATERA BARAT <br>
                                <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> https://maps.app.goo.gl/B36ab88wHfxSAVNF8
                                </a> <br>
                            </p>
                        </div>
                    </div>

                    <!-- <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="card-body text-primary">
                            <h5 class="card-title">AWR Tour Travel</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> Alamat <br>
                                <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> Link Google Maps
                                </a> <br>
                                <i class="bi bi-whatsapp"></i> No WA
                            </p>
                        </div>
                    </div>

                    <div class="card border-primary mb-1" style="max-width: 18rem;">
                        <div class="card-body text-primary">
                            <h5 class="card-title">Erte Oke Travel</h5>
                            <p class="card-text">
                                <i class="bi bi-info-circle"></i> Alamat <br>
                                <a href="https://maps.google.com/" target="_blank">
                                    <i class="bi bi-geo"></i> Link Google Maps
                                </a> <br>
                                <i class="bi bi-whatsapp"></i> No Wa
                            </p>
                        </div>
                    </div>
                </div> -->
      </div>
    </div>
      
    </div>
  </div>
</div>

{{--  --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
  const icons = document.querySelectorAll('.altmenu i');
  const dropdowns = document.querySelectorAll('.dropdown');

  icons.forEach(function(icon) {
    icon.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.parentNode.getAttribute('data-target');
      const targetDropdown = document.getElementById(targetId);

      dropdowns.forEach(function(dropdown) {
        dropdown.classList.remove('active');
      });

      targetDropdown.classList.toggle('active');
    });
  });

  document.addEventListener('click', function(e) {
    if (!e.target.matches('.altmenu i')) {
      dropdowns.forEach(function(dropdown) {
        dropdown.classList.remove('active');
      });
    }
  });
});

</script>

@endsection