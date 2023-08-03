<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderFotoController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\BeritapController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengumumenController;
use App\Http\Controllers\SMTController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SOController;
use App\Http\Controllers\JPController;
use App\Http\Controllers\VmsController;
use App\Http\Controllers\JPegawaiController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\DSBController;
use App\Http\Controllers\TKPController;
use App\Http\Controllers\SABController;
use App\Http\Controllers\IPAMController;
use App\Http\Controllers\GIController;

//login admin
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;

//halaman custumer
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admin.login'], function () {
//halaman home
//slider foto
Route::get('/admin/sliderfoto', [SliderFotoController::class, 'index'])->name('admin.sliderfoto.index');
Route::get('/admin/sliderfoto/create', [SliderFotoController::class, 'create'])->name('admin.sliderfoto.create');
Route::post('/admin/sliderfoto', [SliderFotoController::class, 'store'])->name('admin.sliderfoto.store');
Route::get('/admin/sliderfoto/{sliderfoto}', [SliderFotoController::class, 'show'])->name('admin.sliderfoto.show');
Route::get('/admin/sliderfoto/{sliderfoto}/edit', [SliderFotoController::class, 'edit'])->name('admin.sliderfoto.edit');
Route::put('/admin/sliderfoto/{sliderfoto}', [SliderFotoController::class, 'update'])->name('admin.sliderfoto.update');
Route::delete('/admin/sliderfoto/{sliderfoto}', [SliderFotoController::class, 'destroy'])->name('admin.sliderfoto.destroy');

//home
//pengumuman
Route::get('/admin/pengumuman', [PengumumenController::class, 'index'])->name('admin.pengumumen.index');
Route::get('/admin/pengumuman/create', [PengumumenController::class, 'create'])->name('admin.pengumumen.create');
Route::post('/admin/pengumuman', [PengumumenController::class, 'store'])->name('admin.pengumumen.store');
Route::get('/admin/pengumuman/{id}', [PengumumenController::class, 'show'])->name('admin.pengumumen.show');
Route::get('/admin/pengumuman/{id}/edit', [PengumumenController::class, 'edit'])->name('admin.pengumumen.edit');
Route::put('/admin/pengumuman/{id}', [PengumumenController::class, 'update'])->name('admin.pengumumen.update');
Route::delete('/admin/pengumuman/{id}', [PengumumenController::class, 'destroy'])->name('admin.pengumumen.destroy');

//halaman home
//berita
Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
Route::get('/admin/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/admin/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/admin/berita/{id}', [BeritaController::class, 'show'])->name('admin.berita.show');
Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');

//profle
//smt
Route::get('/admin/smt', [SMTController::class, 'index'])->name('admin.smt.index');
Route::get('/admin/smt/create', [SMTController::class, 'create'])->name('admin.smt.create');
Route::post('/admin/smt', [SMTController::class, 'store'])->name('admin.smt.store');
Route::get('/admin/smt/{id}', [SMTController::class, 'show'])->name('admin.smt.show');
Route::get('/admin/smt/{id}/edit', [SMTController::class, 'edit'])->name('admin.smt.edit');
Route::put('/admin/smt/{id}', [SMTController::class, 'update'])->name('admin.smt.update');
Route::delete('/admin/smt/{id}', [SMTController::class, 'destroy'])->name('admin.smt.destroy');

//prolie
//sejarah singkat

Route::get('/admin/sejarah', [SejarahController::class, 'index'])->name('admin.sejarah.index');
Route::get('/admin/sejarah/create', [SejarahController::class, 'create'])->name('admin.sejarah.create');
Route::post('/admin/sejarah', [SejarahController::class, 'store'])->name('admin.sejarah.store');
Route::get('/admin/sejarah/{id}', [SejarahController::class, 'show'])->name('admin.sejarah.show');
Route::get('//adminsejarah/{id}/edit', [SejarahController::class, 'edit'])->name('admin.sejarah.edit');
Route::put('/admin/sejarah/{id}', [SejarahController::class, 'update'])->name('admin.sejarah.update');
Route::delete('/admin/sejarah/{id}', [SejarahController::class, 'destroy'])->name('admin.sejarah.destroy');

//halaman home
//slider foto
Route::get('/admin/so', [SOController::class, 'index'])->name('admin.so.index');
Route::get('/admin/so/create', [SOController::class, 'create'])->name('admin.so.create');
Route::post('/admin/so', [SOController::class, 'store'])->name('admin.so.store');
Route::get('/admin/so/{id}', [SOController::class, 'show'])->name('admin.so.show');
Route::get('/admin/so/{id}/edit', [SOController::class, 'edit'])->name('admin.so.edit');
Route::put('/admin/so/{id}', [SOController::class, 'update'])->name('admin.so.update');
Route::delete('/admin/so/{id}', [SOController::class, 'destroy'])->name('admin.so.destroy');

//profile
//jumlah pelanggan
Route::get('/admin/jp', [JPController::class, 'index'])->name('admin.jp.index');
Route::get('/admin/jp/create', [JPController::class, 'create'])->name('admin.jp.create');
Route::post('/admin/jp', [JPController::class, 'store'])->name('admin.jp.store');
Route::get('/admin/jp/{id}', [JPController::class, 'show'])->name('admin.jp.show');
Route::get('/admin/jp/{id}/edit', [JPController::class, 'edit'])->name('admin.jp.edit');
Route::put('/admin/jp/{id}', [JPController::class, 'update'])->name('admin.jp.update');
Route::delete('/admin/jp/{id}', [JPController::class, 'destroy'])->name('admin.jp.destroy');

//profile
//visi misi dan startegi
Route::get('/admin/vms', [VmsController::class, 'index'])->name('admin.vms.index');
Route::get('/admin/vms/create', [VmsController::class, 'create'])->name('admin.vms.create');
Route::post('/admin/vms', [VmsController::class, 'store'])->name('admin.vms.store');
Route::get('/admin/vms/{id}/edit', [VmsController::class, 'edit'])->name('admin.vms.edit');
Route::get('/admin/vms/{id}', [VmsController::class, 'show'])->name('admin.vms.show');
Route::put('/admin/vms/{id}', [VmsController::class, 'update'])->name('admin.vms.update');
Route::delete('/admin/vms/{id}', [VmsController::class, 'destroy'])->name('admin.vms.destroy');

//profile
//jumlah pelanggan
Route::get('/admin/jpegawai', [JPegawaiController::class, 'index'])->name('admin.jpegawai.index');
Route::get('/admin/jpegawai/create', [JPegawaiController::class, 'create'])->name('admin.jpegawai.create');
Route::post('/admin/jpegawai', [JPegawaiController::class, 'store'])->name('admin.jpegawai.store');
Route::get('/admin/jpegawai/{id}', [JPegawaiController::class, 'show'])->name('admin.jpegawai.show');
Route::get('/admin/jpegawai/{id}/edit', [JPegawaiController::class, 'edit'])->name('admin.jpegawai.edit');
Route::put('/admin/jpegawai/{id}', [JPegawaiController::class, 'update'])->name('admin.jpegawai.update');
Route::delete('/admin/jpegawai/{id}', [JPegawaiController::class, 'destroy'])->name('admin.jpegawai.destroy');

//penghargaan
Route::get('/admin/penghargaan', [PenghargaanController::class, 'index'])->name('admin.penghargaan.index');
Route::get('/admin/penghargaan/create', [PenghargaanController::class, 'create'])->name('admin.penghargaan.create');
Route::post('/admin/penghargaan', [PenghargaanController::class, 'store'])->name('admin.penghargaan.store');
Route::get('/admin/penghargaan/{id}', [PenghargaanController::class, 'show'])->name('admin.penghargaan.show');
Route::get('/admin/penghargaans/{id}/edit', [PenghargaanController::class, 'edit'])->name('admin.penghargaan.edit');
Route::put('/admin/penghargaans/{id}', [PenghargaanController::class, 'update'])->name('admin.penghargaan.update');
Route::delete('/admin/penghargaan/{id}', [PenghargaanController::class, 'destroy'])->name('admin.penghargaan.destroy');

//info pelanggan
//dsb
Route::get('/admin/dsb', [DSBController::class, 'index'])->name('admin.dsb.index');
Route::get('/admin/dsb/create', [DSBController::class, 'create'])->name('admin.dsb.create');
Route::post('/admin/dsb', [DSBController::class, 'store'])->name('admin.dsb.store');
Route::get('/admin/dsb/{id}', [DSBController::class, 'show'])->name('admin.dsb.show');
Route::get('/admin/dsb/{id}/edit', [DSBController::class, 'edit'])->name('admin.dsb.edit');
Route::put('/admin/dsb/{id}', [DSBController::class, 'update'])->name('admin.dsb.update');
Route::delete('/admin/dsb/{id}', [DSBController::class, 'destroy'])->name('admin.dsb.destroy');

//halaman info pelanggan
//tabel klasifikasi pelanggan
Route::get('/admin/tkp', [TKPController::class, 'index'])->name('admin.tkp.index');
Route::get('/admin/tkp/create', [TKPController::class, 'create'])->name('admin.tkp.create');
Route::post('/admin/tkp', [TKPController::class, 'store'])->name('admin.tkp.store');
Route::get('/admin/tkp/{id}', [TKPController::class, 'show'])->name('admin.tkp.show');
Route::get('/admin/tkp/{id}/edit', [TKPController::class, 'edit'])->name('admin.tkp.edit');
Route::put('/admin/tkp/{id}', [TKPController::class, 'update'])->name('admin.tkp.update');
Route::delete('/admin/tkp/{id}', [TKPController::class, 'destroy'])->name('admin.tkp.destroy');

//halaman info pelanggan
//tabel klasifikasi pelanggan
Route::get('/admin/sab', [SABController::class, 'index'])->name('admin.sab.index');
Route::get('/admin/sab/create', [SABController::class, 'create'])->name('admin.sab.create');
Route::post('/admin/sab', [SABController::class, 'store'])->name('admin.sab.store');
Route::get('/admin/sab/{id}', [SABController::class, 'show'])->name('admin.sab.show');
Route::get('/admin/sab/{id}/edit', [SABController::class, 'edit'])->name('admin.sab.edit');
Route::put('/admin/sab/{id}', [SABController::class, 'update'])->name('admin.sab.update');
Route::delete('/admin/sab/{id}', [SABController::class, 'destroy'])->name('admin.sab.destroy');

//halaman Infrastuktur
//sumber air baku
    Route::get('/admin/ipam', [IPAMController::class, 'index'])->name('admin.ipam.index');
    Route::get('/admin/ipam/create', [IPAMController::class, 'create'])->name('admin.ipam.create');
    Route::post('/admin/ipam', [IPAMController::class, 'store'])->name('admin.ipam.store');
    Route::get('/admin/ipam/{id}', [IPAMController::class, 'show'])->name('admin.ipam.show');
    Route::get('/admin/ipam/{id}/edit', [IPAMController::class, 'edit'])->name('admin.ipam.edit');
    Route::put('/admin/ipam/{id}', [IPAMController::class, 'update'])->name('admin.ipam.update');
    Route::delete('/admin/ipam/{id}', [IPAMController::class, 'destroy'])->name('admin.ipam.destroy');

//halaman Infrastuktur
//galeri ipa
    Route::get('/admin/gi', [GIController::class, 'index'])->name('admin.gi.index');
    Route::get('/admin/gi/create', [GIController::class, 'create'])->name('admin.gi.create');
    Route::post('/admin/gi', [GIController::class, 'store'])->name('admin.gi.store');
    Route::get('/admin/gi/{id}', [GIController::class, 'show'])->name('admin.gi.show');
    Route::get('/admin/gi/{id}/edit', [GIController::class, 'edit'])->name('admin.gi.edit');
    Route::put('/admin/gi/{id}', [GIController::class, 'update'])->name('admin.gi.update');
    Route::delete('/admin/gi/{id}', [GIController::class, 'destroy'])->name('admin.gi.destroy');

//halaman berita
//berita peristiwa

    Route::get('/admin/beritap', [BeritapController::class, 'index'])->name('admin.beritap.index');
    Route::get('/admin/beritap/create', [BeritapController::class, 'create'])->name('admin.beritap.create');
    Route::post('/admin/beritap', [BeritapController::class, 'store'])->name('admin.beritap.store');
    Route::get('/admin/beritap/{id}', [BeritapController::class, 'show'])->name('admin.beritap.show');
    Route::get('/admin/beritap/{id}/edit', [BeritapController::class, 'edit'])->name('admin.beritap.edit');
    Route::put('/admin/beritap/{id}', [BeritapController::class, 'update'])->name('admin.beritap.update');
    Route::delete('/admin/beritap/{id}', [BeritapController::class, 'destroy'])->name('admin.beritap.destroy');


    Route::get('/admin/kegiatan', [KegiatanController::class, 'index'])->name('admin.kegiatan.index');
    Route::get('/admin/kegiatan/create', [KegiatanController::class, 'create'])->name('admin.kegiatan.create');
    Route::post('/admin/kegiatan', [KegiatanController::class, 'store'])->name('admin.kegiatan.store');
    Route::get('/admin/kegiatan/{id}', [KegiatanController::class, 'show'])->name('admin.kegiatan.show');
    Route::get('/admin/kegiatan/{id}/edit', [KegiatanController::class, 'edit'])->name('admin.kegiatan.edit');
    Route::put('/admin/kegiatan/{id}', [KegiatanController::class, 'update'])->name('admin.kegiatan.update');
    Route::delete('/admin/kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('admin.kegiatan.destroy');
});

//halaman login
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


// Route untuk menampilkan dashboard admin setelah login berhasil
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//halaman custumer
//berita arikel
Route::get('/customer/berita', [CustomerController::class, 'berita_index'])->name('customer.berita.berita.index');
Route::get('/customer/berita/{id}', [CustomerController::class, 'berita_show'])->name('customer.berita.berita.show');

//berita peristiwa
Route::get('/customer/beritap', [CustomerController::class, 'beritap_index'])->name('customer.beritap.beritap.index');
Route::get('/customer/beritap/{id}', [CustomerController::class, 'beritap_show'])->name('customer.beritap.beritap.show');

//cara daftar sambungan baru
Route::get('/customer/dsb', [CustomerController::class, 'dsb_index'])->name('customer.dsb.dsb.index');
Route::get('/customer/dsb/{id}', [CustomerController::class, 'dsb_show'])->name('customer.dsb.dsb.show');

//kegiatan 
Route::get('/customer/kegiatan', [CustomerController::class, 'kegiatan_index'])->name('customer.kegiatan.kegiatan.index');
Route::get('/customer/kegiatan/{id}', [CustomerController::class, 'kegiatan_show'])->name('customer.kegiatan.detail_kegiatan.show');

//SAB
Route::get('/customer/sab', [CustomerController::class, 'sab_index'])->name('customer.sab.sab.index');

//IPAM
Route::get('/customer/ipam', [CustomerController::class, 'ipam_index'])->name('customer.ipam.ipam.index');

//Galeri IPA
Route::get('/customer/gi', [CustomerController::class, 'gi_index'])->name('customer.gi.gi.index');

//Tabel Klasisfikasi Pelanggan
Route::get('/customer/tkp', [CustomerController::class, 'tkp_index'])->name('customer.tkp.tkp.index');

//kegiatan 
Route::get('/customer/penghargaan', [CustomerController::class, 'penghargaan_index'])->name('customer.penghargaan.penghargaan.index');
Route::get('/customer/penghargaan/{id}', [CustomerController::class, 'penghargaan_show'])->name('customer.penghargaan.penghargaan.show');

//Struktur Organisasi
Route::get('/customer/so', [CustomerController::class, 'so_index'])->name('customer.so.so.index');

//Jumlah Pelanggan 
Route::get('/customer/jp', [CustomerController::class, 'jp_index'])->name('customer.jp.jp.index');

//Jumlah Pegawai
Route::get('/customer/jpegawai', [CustomerController::class, 'jpegawai_index'])->name('customer.jpegawai.jpegawai.index');

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//halaman home -->
Route::get('/customer/home', [CustomerController::class, 'home_index'])->name('customer.home.home.index');

//detail berita artikel
Route::get('/customer/home/berita/{id}', [CustomerController::class, 'home_detail_berita'])->name('customer.home.berita.show');
Route::get('/customer/home/beritap/{id}', [CustomerController::class, 'home_detail_beritap'])->name('customer.home.beritap.show');

