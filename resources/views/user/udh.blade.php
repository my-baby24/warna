@extends('layouts.appUser')

@section('content')
<!-- Basic Form section start -->
<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">KONFIRMASI KEHADIRAN</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('udh.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" id="nip" class="form-control" name="nip" placeholder="NIP" value="{{ auth()->user()->nip }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama" value="{{ auth()->user()->name }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="konfirmasi">Konfirmasi Kehadiran</label><br>
                                        <input type="radio" id="iya" name="konfirmasi" value="iya" required>
                                        <label for="iya">Iya</label><br>
                                        <input type="radio" id="tidak" name="konfirmasi" value="tidak" required>
                                        <label for="tidak">Tidak</label>
                                    </div>
                                </div>
                                <!-- success -->
                                @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible show fade" role="alert">
                                    {{ Session::get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
                                </div>
                                @endif
                                <!-- error -->
                                @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible show fade" role="alert">
                                    {{ Session::get('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                <!-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" id="judul" class="form-control" name="judul" placeholder="Judul">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="jenis_pelaksanaan_diklat">Jenis Pelaksanaan Diklat</label>
                                        <input type="text" id="jenis_pelaksanaan_diklat" class="form-control" name="jenis_pelaksanaan_diklat" placeholder="Jenis Pelaksanaan Diklat">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tanggal_absensi">Tanggal Absensi</label>
                                        <input type="date" id="tanggal_absensi" class="form-control" name="tanggal_absensi">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="penggantian_kuota">Penggantian Kuota</label>
                                        <input type="text" id="penggantian_kuota" class="form-control" name="penggantian_kuota" placeholder="Penggantian Kuota">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="no_hp">No Hp</label>
                                        <input type="text" id="no_hp" class="form-control" name="no_hp" placeholder="No Hp">
                                    </div>
                                </div> -->
                                <div class="col-12 d-flex justify-content-end">
                                    <span>Konfirmasi Kehadiran Anda</span>
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <!-- <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Form section end -->
@endsection
