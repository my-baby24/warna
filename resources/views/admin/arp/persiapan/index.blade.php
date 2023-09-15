@extends('layouts.admin')
@section('content')

 <style>
        .toggle-button {
            display: inline-block;
            background-color: #ccc;
            padding: 5px 10px;
            border-radius: 20px;
            cursor: pointer;
        }

        input[type="radio"] {
            display: none;
        }

        input[type="radio"]:checked + .toggle-button {
            background-color: #4CAF50; /* Warna hijau untuk "True" */
            color: white;
        }

        input[type="radio"]:not(:checked) + .toggle-button {
            background-color: #FF5733; /* Warna merah untuk "False" */
            color: white;
        }
    </style>
<div class="row">
        <div class="col-12">
        
            <div class="card">
                <div class="card-header">
                    Informasi Pembelajaran
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
                                    <th style="min-width: 150px;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="align-middle text-center">1</td>
                                <td class="align-middle text-center">Kesiapan Materi</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                                <td class="align-middle text-center">Keterangan</td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">2</td>
                                <td class="align-middle text-center">Surat Pemanggilan Peserta</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                                <td class="align-middle text-center">Keterangan</td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">3</td>
                                <td class="align-middle text-center">Surat Pemanggilan Instruktur</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                                <td class="align-middle text-center">Keterangan</td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">4</td>
                                <td class="align-middle text-center">Pembuatan Grup WA</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                                <td class="align-middle text-center">Keterangan</td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">5</td>
                                <td class="align-middle text-center">Pembuatan Zoom/Digital</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                                <td class="align-middle text-center">Keterangan</td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">6</td>
                                <td class="align-middle text-center">Nota Dinas Rendiklat ke MUP</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                                <td class="align-middle text-center">Keterangan</td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">7</td>
                                <td class="align-middle text-center">Tindaklanjut Nota Dinas Rendiklat</td>
                                <td class="align-middle text-center">Yan</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                                <td class="align-middle text-center">Keterangan</td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">8</td>
                                <td class="align-middle text-center">Pembuatan RKS Narasumber</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                                <td class="align-middle text-center">Keterangan</td>
                            </tr>

                            <tr>
                                <td class="align-middle text-center">8</td>
                                <td class="align-middle text-center">Pembatan KOntrak</td>
                                <td class="align-middle text-center">Jar</td>
                                <td class="align-middle text-center">
                                <select class="form-select">
                                    <option class="green-option">V</option>
                                    <option class="red-option">X</option>
                                </select>
                                </td>
                                <td class="align-middle text-center">Keterangan</td>
                            </tr>
                                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<style>
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            max-width: none;
        }

        .table th,
        .table td {
            white-space: nowrap;
        }
    </style>

    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endsection 