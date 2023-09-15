@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-12">
        
            <div class="card">
                <div class="card-header">
                    Pasca
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">Kegiatan</th>
                                    <th style="min-width: 150px;">PIC</th>
                                    <th style="min-width: 150px;">Ceklist</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="align-middle text-center">1</td>
                                <td class="align-middle text-center">Laporan Pembelajaran</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">2</td>
                                <td class="align-middle text-center">Pengajuan Honorarium</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">3</td>
                                <td class="align-middle text-center">Surat Pesanan Penggantian Kuota</td>
                                <td class="align-middle text-center">Yan</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">4</td>
                                <td class="align-middle text-center">Progres Tagihan</td>
                                <td class="align-middle text-center">Keu</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">5</td>
                                <td class="align-middle text-center">Proses Honorarium</td>
                                <td class="align-middle text-center">Keu</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                            </tr>
                                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection