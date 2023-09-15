@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-12">
        
            <div class="card">
                <div class="card-header">
                    Realisasi Biaya
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
                                <td class="align-middle text-center">HONORARIUM INSTRUKTUR</td>
                                <td class="align-middle text-center">Keu</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">2</td>
                                <td class="align-middle text-center">LAUNDRY</td>
                                <td class="align-middle text-center">Keu</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">3</td>
                                <td class="align-middle text-center">PENGINAPAN</td>
                                <td class="align-middle text-center">Keu</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">4</td>
                                <td class="align-middle text-center">KONSUMSI</td>
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
                                <td class="align-middle text-center">Kuota Internet</td>
                                <td class="align-middle text-center">Keu</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">6</td>
                                <td class="align-middle text-center">Bahan Praktikum</td>
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