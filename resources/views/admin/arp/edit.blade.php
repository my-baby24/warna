@extends('layouts.admin')
@section ('title', 'Edit data')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Edit Data</h4>
                <a href="{{ route('arp.index') }}" class="btn btn-info mb-3">Kembali</a>
            </div>

            <div class="card-body">
                <form action="{{ route('arp.update', $arp->id) }}" method="POST">
                    @csrf
                    @method ('PUT')
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{$arp->tanggal_mulai}}">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{$arp->tanggal_selesai}}">
                    </div>

                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan kode" value="{{$arp->kode}}">
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul" value="{{$arp->judul}}">
                    </div>

                    <div class="form-group">
                        <label for="jenis_permintaan_diklat">Jenis Permintaan Diklat</label>
                        <input type="text" class="form-control" id="jenis_permintaan_diklat" name="jenis_permintaan_diklat" placeholder="Masukkan Jenis Permintaan" value="{{$arp->jenis_permintaan_diklat}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="jenis_pelaksanaan_diklat">Jenis Pelaksanaan Diklat</label>
                        <input type="text" class="form-control" id="jenis_pelaksanaan_diklat" name="jenis_pelaksanaan_diklat" placeholder="Masukkan Jenis Pelaksanaan" value="{{$arp->jenis_pelaksanaan_diklat}}">
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukkan Angkatan" value="{{$arp->angkatan}}">
                    </div>
                    <div class="form-group">
                        <label for="instruktur">Instruktur</label>
                        <input type="text" class="form-control" id="instruktur" name="instruktur" placeholder="Instruktur" value="{{$arp->instruktur}}">
                    </div>
                    {{-- <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            @foreach($kelasOptions as $id => $namakelas)
                            <option value="{{ $id }}">{{ $namakelas }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="wisma">Wisma</label>
                        <select class="form-control" id="wisma" name="wisma">
                            @foreach($wismaOptions as $id => $nama_wisma)
                                <option value="{{ $id }}">{{ $nama_wisma }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    
                    <button type="submit" class="btn btn-outline-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection