@extends('layouts.admin')
@section('content')

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Contact
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
                                    <th style="min-width: 150px;">Nama</th>
                                    <th style="min-width: 150px;">Email</th>
                                    <th style="min-width: 150px;">Subject</th>
                                    <th style="min-width: 150px;">Pesan</th>
                                    <th style="min-width: 150px;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $contact->nama_visit }}</td>
                                    <td class="align-middle">{{ $contact->email_visit }}</td>
                                    <td class="align-middle">{{ $contact->subject }}</td>
                                    <td class="align-middle">{{ $contact->pesan }}</td>
                                    <td class="align-middle" id="aksi-{{ $contact->id }}" style="cursor: pointer;" onclick="markAsRead({{ $contact->id }})">
                                        <span class="badge badge-success bg-danger text-white" id="status-{{ $contact->id }}">Belum Dibaca</span>
                                    </td>
                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan ini di bagian bawah view -->
    <script>
    function markAsRead(id) {
        fetch(`/admin/contact/mark-as-read/${id}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Ubah teks status di tabel
                const statusElement = document.querySelector(`#status-${id}`);
                statusElement.innerText = 'Sudah Dibaca';

                // Optional: Hapus kelas yang mungkin ada (opsional, sesuai kebutuhan desain)
                statusElement.classList.remove('bg-danger');
                statusElement.classList.remove('text-white');

                // Tambahkan kelas untuk memberikan warna merah
                statusElement.classList.add('bg-success'); // atau kelas CSS yang menentukan warna merah

                // Tambahkan logika atau perubahan visual jika diperlukan
                alert('Pesan berhasil ditandai sebagai sudah dibaca.');
            } else {
                alert('Gagal menandai pesan sebagai sudah dibaca.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>


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
