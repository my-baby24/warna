<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArpController;
use App\Http\Controllers\ArpRencanaPeController;
use App\Http\Controllers\ArealisasiPesertaController;
use App\Http\Controllers\AdaftarHadirController;
use App\Http\Controllers\UdaftarHadirController;
use App\Http\Controllers\UabsensiPesertaController;
use App\Http\Controllers\AboutDashboardController;
use App\Http\Controllers\ContactDashboardController;
use App\Http\Controllers\InformasiDashboardController;
use App\Http\Controllers\InformasiDetailsDashboardController;
use App\Http\Controllers\KomunitasDashboardController;
use App\Http\Controllers\SaranaDashboardController;
use App\Http\Controllers\SoonController;
use App\Http\Controllers\SettingHariController;
use App\Http\Controllers\PersiapanController;
use App\Http\Controllers\PelaksanaanController;
use App\Http\Controllers\PascaController;
use App\Http\Controllers\RealisasiBiayaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\WismaController;
use App\Http\Controllers\DownloadFormController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckInController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminMiddleware;

// Rute-rute standar
Route::get('/', function () {
    return view('welcome');
})->name('wlcm');




Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/uinformasi-pembelajaran', 'App\Http\Controllers\IpController@viewindex')->name('uip.viewindex');
    Route::get('/konfirmasi-peserta', 'App\Http\Controllers\UdaftarHadirController@index')->name('udh.index');
    Route::post('/ukonfirmasi', 'App\Http\Controllers\UdaftarHadirController@store')->name('udh.store')->middleware('checkAbsensi');
    
    // absensi
    Route::get('/absensi', 'App\Http\Controllers\UabsensiPesertaController@index')->name('absensi.create')->middleware('checkAbsensiHarian');
    Route::post('/absensi', 'App\Http\Controllers\UabsensiPesertaController@store')->name('absensi.store')->middleware('checkAbsensiHarian');
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Layout
    Route::get('/user/layout', [LayoutController::class, 'index'])->name('layout.index');
});

require __DIR__.'/auth.php';

// Rute-rute admin
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/arp', [ArpController::class, 'index'])->name('arp.index');

        Route::middleware([AdminMiddleware::class . ':super-admin,jar-admin'])->group(function () {
            Route::get('/arp/create', [ArpController::class, 'create'])->name('arp.create');
            Route::post('/arp/store', [ArpController::class, 'store'])->name('arp.store');
            Route::post('/upload-rendiklat', 'App\Http\Controllers\ArpController@uploadRendiklat')->name('arp.uploadRendiklat');

            Route::get('/edit/{id}', [ArpController::class, 'edit'])->name('arp.edit');
            Route::put('/arp/{id}', [ArpController::class, 'update'])->name('arp.update');
            Route::post('/upload-peserta', 'App\Http\Controllers\ArpController@uploadPeserta')->name('arp.uploadPeserta');
            Route::delete('/destroy/{id}', [ArpController::class, 'destroy'])->name('arp.destroy');

            // rencana peserta
            Route::get('/arp/peserta/{id}', [ArpController::class, 'showPeserta'])->name('arp.peserta');
            // realisasi Peserta
            Route::get('/arp/realisasipeserta/{id}', [ArealisasiPesertaController::class, 'showRealisasi'])->name('show.realisasi');
            Route::post('/arp/realisasipeserta/store', [ArealisasiPesertaController::class, 'storeRealisasi'])->name('store.realisasi');
            // Rute pengaturan absensi
            Route::get('/settings/absensi', 'App\Http\Controllers\SettingHariController@settings')->name('settings.absensi');
            Route::put('/settings/absensi', 'App\Http\Controllers\SettingHariController@updateSettings')->name('settings.absensi.update');

        });
    
    Route::post('/import-excel', [ExcelController::class, 'import'])->name('import.excel');
    Route::get('/admin/aip', 'App\Http\Controllers\ArpController@aipView')->middleware(['verified'])->name('admin.aip.view');
    // AdaftarHadirController routes
    Route::resource('Adh', AdaftarHadirController::class);
    Route::get('/admin/adh', 'App\Http\Controllers\AdaftarHadirController@index')->name('adh');

    


    // PERSIAPAN
    // Route::get('/admin/arp/persiapan', 'App\Http\Controllers\PersiapanController@index')->name('persiapan.index');
    Route::prefix('persiapan')->group(function () {
        Route::get('/{arpId}', [PersiapanController::class, 'index'])->name('persiapan.index');
        Route::post('/{arpId}', [PersiapanController::class, 'store'])->name('persiapan.store');
        // Route::get('/{arpId}/edit/{persiapanId}', [PersiapanController::class, 'edit'])->name('persiapan.edit');
        Route::put('/persiapan/{arpId}/update/{persiapanId}', [PersiapanController::class, 'update'])->name('persiapan.update');
        Route::delete('/{arpId}/{kegiatanId}', [PersiapanController::class, 'destroy'])->name('persiapan.destroy');

        

    });

    // PELAKSANAAN
    Route::prefix('pelaksanaan')->group(function () {
        Route::get('/{arpId}', [PelaksanaanController::class, 'index'])->name('pelaksanaan.index');
        Route::post('/{arpId}', [PelaksanaanController::class, 'store'])->name('pelaksanaan.store');
        // Route::get('/{arpId}/edit/{persiapanId}', [PersiapanController::class, 'edit'])->name('persiapan.edit');
        Route::put('/pelaksanaan/{arpId}/update/{pelaksanaanId}', [PelaksanaanController::class, 'update'])->name('pelaksanaan.update');
        Route::delete('/{arpId}/{kegiatanId}', [PelaksanaanController::class, 'destroy'])->name('pelaksanaan.destroy');
    });

    // PASCA
    Route::prefix('pasca')->group(function () {
        Route::get('/{arpId}', [PascaController::class, 'index'])->name('pasca.index');
        Route::post('/{arpId}', [PascaController::class, 'store'])->name('pasca.store');
        Route::put('/pasca/{arpId}/update/{pascaId}', [PascaController::class, 'update'])->name('pasca.update');
        Route::delete('/{arpId}/{kegiatanId}', [PascaController::class, 'destroy'])->name('pasca.destroy');
    });
    Route::prefix('realisasiBiaya')->group(function () {
        Route::get('/{arpId}', [RealisasiBiayaController::class, 'index'])->name('realisasiBiaya.index');
        Route::post('/{arpId}', [RealisasiBiayaController::class, 'store'])->name('realisasiBiaya.store');
        Route::put('/realisasiBiaya/{arpId}/update/{pascaId}', [RealisasiBiayaController::class, 'update'])->name('realisasiBiaya.update');
        Route::delete('/{arpId}/{kegiatanId}', [RealisasiBiayaController::class, 'destroy'])->name('realisasiBiaya.destroy');

    });
    

    



    // Download Form
    Route::get('download/form/{type}', [DownloadFormController::class, 'downloadForm'])->name('download.form');
    Route::get('arp/download/excel', [ArpController::class, 'downloadExcel']);
    Route::get('arp/download/pdf', [ArpController::class, 'downloadPDF']);

    Route::middleware(['createAccount'])->group(function () {
        Route::get('/create-account', [AccountController::class, 'create'])->name('accounts.create');
        Route::post('/create-account', [AccountController::class, 'store'])->name('accounts.store');
    });
    Route::middleware([AdminMiddleware::class . ':super-admin'])->group(function () {
        // sarana
        Route::get('/sarana-admin', [SaranaController::class, 'index'])->name('sarana.admin');
        Route::post('/sarana-admin/store', [SaranaController::class, 'store'])->name('sarana.store');
        Route::put('/sarana-admin/edit/{id}', [SaranaController::class, 'edit'])->name('sarana.edit');
        Route::delete('/sarana-admin/delete/{id}', [SaranaController::class, 'destroy'])->name('sarana.destroy');
        
        Route::get('/setting-kelas', [KelasController::class, 'index'])->name('kelas.index');
        Route::post('/setting-kelas/store', [KelasController::class, 'store'])->name('kelas.store');
        Route::put('/setting-kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
        Route::delete('/setting-kelas/delete/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

        Route::get('/setting-wisma', [WismaController::class, 'index'])->name('wisma.index');
        Route::post('/setting-wisma/store', [WismaController::class, 'store'])->name('wisma.store');
        Route::put('/setting-wisma/edit/{id}', [WismaController::class, 'edit'])->name('wisma.edit');
        Route::delete('/setting-wisma/delete/{id}', [WismaController::class, 'destroy'])->name('wisma.destroy');

        // informasi
        Route::get('/informasi-admin', [InformasiController::class, 'index'])->name('informasiadmin.admin');
        Route::post('/informasi-admin/store', [InformasiController::class, 'store'])->name('informasiadmin.store');
        Route::put('/informasi-admin/edit/{id}', [InformasiController::class, 'edit'])->name('informasiadmin.edit');
        Route::delete('/informasi-admin/delete/{id}', [InformasiController::class, 'destroy'])->name('informasiadmin.destroy');
    });

    

    //Check In di Dashboard
    // Route::get('/soon', [CheckInController::class, 'index'])->name('soon.index');
    // Route::post('/check-in', [CheckInController::class, 'checkIn'])->name('check-in');



    //Contact Admin
    Route::get('/contact', [ContactController::class, 'index'])->name('contactadmin.index');
    // Contoh route
    Route::get('/admin/contact/get-status/{id}', 'ContactController@getStatus');

    

});

require __DIR__.'/adminauth.php';

// Welcome
Route::get('/informasi-pembelajaran', 'App\Http\Controllers\IpController@index')->name('ip.index');
Route::get('/about-dashboard', 'App\Http\Controllers\AboutDashboardController@index')->name('about.index');
Route::get('/contact-dashboard', 'App\Http\Controllers\ContactDashboardController@index')->name('contact.index');
Route::post('/contact', [ContactDashboardController::class, 'store'])->name('contact.store');

// Tambahkan ini di routes/web.php
Route::post('/admin/contact/mark-as-read/{id}', [ContactController::class, 'markAsRead'])->name('admin.contact.mark-as-read');

Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact.index');
Route::post('/admin/contact/mark-as-read/{id}', [ContactController::class, 'markAsRead'])->name('admin.contact.mark-as-read');



// Untuk Dashboard ya gesya
Route::get('/informasi-dashboard', 'App\Http\Controllers\InformasiDashboardController@index')->name('informasi.index');
// Route::get('/informasidetails-dashboard', 'App\Http\Controllers\InformasiDetailsDashboardController@index')->name('informasi-details.index');
Route::get('/informasidetails-dashboard/{id}', [InformasiDetailsDashboardController::class, 'show'])->name('informasi-details.show');


Route::get('/komunitas-dashboard', 'App\Http\Controllers\KomunitasDashboardController@index')->name('komunitas.index');
Route::get('/sarana-dashboard', 'App\Http\Controllers\SaranaDashboardController@index')->name('sarana.index');
Route::get('/soon', 'App\Http\Controllers\SoonController@index')->name('soon.index');
