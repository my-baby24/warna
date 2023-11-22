@extends('layouts.appUser')

@section('content')
<h1>Hallo {{ Auth::user()->name }} Selamat Datang di Halaman Peserta</h1>

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
@endsection