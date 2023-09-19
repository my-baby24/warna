@extends('layouts.admin')
@section('content')

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    WISMA
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <table class="table table-bordered table-striped mb-0" id="table1">
                            <thead>
                                <tr>
                                <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">No Wisma</th>
                                    <th style="min-width: 150px;">Nama Wisma</th>
                                    <th style="min-width: 150px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($wismas as $wisma)
                            <tr>
                                <form action="{{ route('wisma.store') }}" method="POST">
                                @csrf
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $wisma->nowisma }}</td>
                                <td class="align-middle">{{ $wisma->namawisma }}</td>
                                    
                                    
                                    <td class="align-middle"><button type="submit" class="btn btn-primary">Update</button></td>
                                </form>
                            </tr>
                            @endforeach
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