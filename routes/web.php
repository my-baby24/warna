<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArpController;
use App\Http\Controllers\ArpRencanaPeController;
use App\Http\Controllers\AdaftarHadirController;
use App\Http\Controllers\UdaftarHadirController;
use App\Http\Controllers\AboutDashboardController;
use App\Http\Controllers\ContactDashboardController;
use App\Http\Controllers\InformasiDashboardController;
use App\Http\Controllers\InformasiDetailsDashboardController;
use App\Http\Controllers\KomunitasDashboardController;
use App\Http\Controllers\SaranaDashboardController;
use Illuminate\Support\Facades\Route;

// Rute-rute standar
Route::get('/', function () {
    return view('welcome');
})->name('wlcm');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/uinformasi-pembelajaran', 'App\Http\Controllers\IpController@viewindex')->name('uip.viewindex');
    Route::get('/udaftar-hadir', 'App\Http\Controllers\UdaftarHadirController@index')->name('udh.index');
    // Route::post('/udaftar-hadiradd', 'App\Http\Controllers\UdaftarHadirController@addHadir')->name('udh.add');
    Route::post('/udaftar-hadirstore', 'App\Http\Controllers\UdaftarHadirController@store')->name('udh.store')->middleware('checkAbsensi');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Rute-rute admin
Route::middleware(['auth:admin'])->group(function () {
    // ArpController routes
    // Route::resource('Arp', ArpController::class);
    Route::get('/arp', [ArpController::class, 'index'])->name('arp.index');
    Route::get('/arp/create', [ArpController::class, 'create'])->name('arp.create');
    Route::post('/arp/store', [ArpController::class, 'store'])->name('arp.store');
    Route::get('/edit/{id}', [ArpController::class, 'edit'])->name('arp.edit');
    Route::put('/arp/{id}', [ArpController::class, 'update'])->name('arp.update');
    Route::delete('/destroy/{id}', [ArpController::class, 'destroy'])->name('arp.destroy');
    Route::post('/upload-rendiklat', 'App\Http\Controllers\ArpController@uploadRendiklat')->name('arp.uploadRendiklat');
    Route::post('/upload-peserta', 'App\Http\Controllers\ArpController@uploadPeserta')->name('arp.uploadPeserta');
    // Route::post('/upload-peserta/{arp_id}', 'App\Http\Controllers\ArpController@uploadPeserta')->name('arp.uploadPeserta');
    Route::get('/admin/aip', 'App\Http\Controllers\ArpController@aipView')->middleware(['verified'])->name('admin.aip.view');

    // AdaftarHadirController routes
    Route::resource('Adh', AdaftarHadirController::class);
    Route::get('/admin/adh', 'App\Http\Controllers\AdaftarHadirController@index')->name('adh');    

    // Rute yang hanya dapat diakses oleh super admin dan jar admin
    Route::middleware(['super-admin', 'jar-admin'])->group(function () {
        // ArpRencanaPeController routes
        // Route::resource('ArpRencanaPe', ArpRencanaPeController::class);
        Route::get('/arp/peserta/{id}', [ArpController::class, 'showPeserta'])->name('arp.peserta');
        // Route::get('/admin/arp/subarp', [ArpRencanaPeController::class, 'show'])->name('arprencanape.show');
    });
});

require __DIR__.'/adminauth.php';

// Welcome
Route::get('/informasi-pembelajaran', 'App\Http\Controllers\IpController@index')->name('ip.index');
Route::get('/about-dashboard', 'App\Http\Controllers\AboutDashboardController@index')->name('about.index');
Route::get('/contact-dashboard', 'App\Http\Controllers\ContactDashboardController@index')->name('contact.index');
Route::get('/informasi-dashboard', 'App\Http\Controllers\InformasiDashboardController@index')->name('informasi.index');
Route::get('/informasidetails-dashboard', 'App\Http\Controllers\InformasiDetailsDashboardController@index')->name('informasi-details.index');
Route::get('/komunitas-dashboard', 'App\Http\Controllers\KomunitasDashboardController@index')->name('komunitas.index');
Route::get('/sarana-dashboard', 'App\Http\Controllers\SaranaDashboardController@index')->name('sarana.index');
