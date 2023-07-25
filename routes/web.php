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

//login
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;



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
Route::get('/sliderfoto', [SliderFotoController::class, 'index'])->name('sliderfoto.index');
Route::get('/sliderfoto/create', [SliderFotoController::class, 'create'])->name('sliderfoto.create');
Route::post('/sliderfoto', [SliderFotoController::class, 'store'])->name('sliderfoto.store');
Route::get('/sliderfoto/{sliderfoto}', [SliderFotoController::class, 'show'])->name('sliderfoto.show');
Route::get('/sliderfoto/{sliderfoto}/edit', [SliderFotoController::class, 'edit'])->name('sliderfoto.edit');
Route::put('/sliderfoto/{sliderfoto}', [SliderFotoController::class, 'update'])->name('sliderfoto.update');
Route::delete('/sliderfoto/{sliderfoto}', [SliderFotoController::class, 'destroy'])->name('sliderfoto.destroy');

//home
//pengumuman
Route::get('/pengumuman', [PengumumenController::class, 'index'])->name('pengumumen.index');
Route::get('/pengumuman/create', [PengumumenController::class, 'create'])->name('pengumumen.create');
Route::post('/pengumuman', [PengumumenController::class, 'store'])->name('pengumumen.store');
Route::get('/pengumuman/{id}', [PengumumenController::class, 'show'])->name('pengumumen.show');
Route::get('/pengumuman/{id}/edit', [PengumumenController::class, 'edit'])->name('pengumumen.edit');
Route::put('/pengumuman/{id}', [PengumumenController::class, 'update'])->name('pengumumen.update');
Route::delete('/pengumuman/{id}', [PengumumenController::class, 'destroy'])->name('pengumumen.destroy');

//halaman home
//berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

//profle
//smt
Route::get('/smt', [SMTController::class, 'index'])->name('smt.index');
Route::get('/smt/create', [SMTController::class, 'create'])->name('smt.create');
Route::post('/smt', [SMTController::class, 'store'])->name('smt.store');
Route::get('/smt/{id}', [SMTController::class, 'show'])->name('smt.show');
Route::get('/smt/{id}/edit', [SMTController::class, 'edit'])->name('smt.edit');
Route::put('/smt/{id}', [SMTController::class, 'update'])->name('smt.update');
Route::delete('/smt/{id}', [SMTController::class, 'destroy'])->name('smt.destroy');

//prolie
//sejarah singkat

Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah.index');
Route::get('/sejarah/create', [SejarahController::class, 'create'])->name('sejarah.create');
Route::post('/sejarah', [SejarahController::class, 'store'])->name('sejarah.store');
Route::get('/sejarah/{id}', [SejarahController::class, 'show'])->name('sejarah.show');
Route::get('/sejarah/{id}/edit', [SejarahController::class, 'edit'])->name('sejarah.edit');
Route::put('/sejarah/{id}', [SejarahController::class, 'update'])->name('sejarah.update');
Route::delete('/sejarah/{id}', [SejarahController::class, 'destroy'])->name('sejarah.destroy');

//halaman home
//slider foto
Route::get('/so', [SOController::class, 'index'])->name('so.index');
Route::get('/so/create', [SOController::class, 'create'])->name('so.create');
Route::post('/so', [SOController::class, 'store'])->name('so.store');
Route::get('/so/{id}', [SOController::class, 'show'])->name('so.show');
Route::get('/so/{id}/edit', [SOController::class, 'edit'])->name('so.edit');
Route::put('/so/{id}', [SOController::class, 'update'])->name('so.update');
Route::delete('/so/{id}', [SOController::class, 'destroy'])->name('so.destroy');

//profile
//jumlah pelanggan
Route::get('/jp', [JPController::class, 'index'])->name('jp.index');
Route::get('/jp/create', [JPController::class, 'create'])->name('jp.create');
Route::post('/jp', [JPController::class, 'store'])->name('jp.store');
Route::get('/jp/{id}', [JPController::class, 'show'])->name('jp.show');
Route::get('/jp/{id}/edit', [JPController::class, 'edit'])->name('jp.edit');
Route::put('/jp/{id}', [JPController::class, 'update'])->name('jp.update');
Route::delete('/jp/{id}', [JPController::class, 'destroy'])->name('jp.destroy');

//profile
//visi misi dan startegi
Route::get('/vms', [VmsController::class, 'index'])->name('vms.index');
Route::get('/vms/create', [VmsController::class, 'create'])->name('vms.create');
Route::post('/vms', [VmsController::class, 'store'])->name('vms.store');
Route::get('/vms/{id}/edit', [VmsController::class, 'edit'])->name('vms.edit');
Route::get('/vms/{id}', [VmsController::class, 'show'])->name('vms.show');
Route::put('/vms/{id}', [VmsController::class, 'update'])->name('vms.update');
Route::delete('/vms/{id}', [VmsController::class, 'destroy'])->name('vms.destroy');

//profile
//jumlah pelanggan
Route::get('/jpegawai', [JPegawaiController::class, 'index'])->name('jpegawai.index');
Route::get('/jpegawai/create', [JPegawaiController::class, 'create'])->name('jpegawai.create');
Route::post('/jpegawai', [JPegawaiController::class, 'store'])->name('jpegawai.store');
Route::get('/jpegawai/{id}', [JPegawaiController::class, 'show'])->name('jpegawai.show');
Route::get('/jpegawai/{id}/edit', [JPegawaiController::class, 'edit'])->name('jpegawai.edit');
Route::put('/jpegawai/{id}', [JPegawaiController::class, 'update'])->name('jpegawai.update');
Route::delete('/jpegawai/{id}', [JPegawaiController::class, 'destroy'])->name('jpegawai.destroy');

//penghargaan
Route::get('/penghargaan', [PenghargaanController::class, 'index'])->name('penghargaan.index');
Route::get('/penghargaan/create', [PenghargaanController::class, 'create'])->name('penghargaan.create');
Route::post('/penghargaan', [PenghargaanController::class, 'store'])->name('penghargaan.store');
Route::get('/penghargaan/{id}', [PenghargaanController::class, 'show'])->name('penghargaan.show');
Route::get('/penghargaans/{id}/edit', [PenghargaanController::class, 'edit'])->name('penghargaan.edit');
Route::put('/penghargaans/{id}', [PenghargaanController::class, 'update'])->name('penghargaan.update');
Route::delete('/penghargaan/{id}', [PenghargaanController::class, 'destroy'])->name('penghargaan.destroy');

//info pelanggan
//dsb
Route::get('/dsb', [DSBController::class, 'index'])->name('dsb.index');
Route::get('/dsb/create', [DSBController::class, 'create'])->name('dsb.create');
Route::post('/dsb', [DSBController::class, 'store'])->name('dsb.store');
Route::get('/dsb/{id}', [DSBController::class, 'show'])->name('dsb.show');
Route::get('/dsb/{id}/edit', [DSBController::class, 'edit'])->name('dsb.edit');
Route::put('/dsb/{id}', [DSBController::class, 'update'])->name('dsb.update');
Route::delete('/dsb/{id}', [DSBController::class, 'destroy'])->name('dsb.destroy');

//halaman info pelanggan
//tabel klasifikasi pelanggan
Route::get('/tkp', [TKPController::class, 'index'])->name('tkp.index');
Route::get('/tkp/create', [TKPController::class, 'create'])->name('tkp.create');
Route::post('/tkp', [TKPController::class, 'store'])->name('tkp.store');
Route::get('/tkp/{id}', [TKPController::class, 'show'])->name('tkp.show');
Route::get('/tkp/{id}/edit', [TKPController::class, 'edit'])->name('tkp.edit');
Route::put('/tkp/{id}', [TKPController::class, 'update'])->name('tkp.update');
Route::delete('/tkp/{id}', [TKPController::class, 'destroy'])->name('tkp.destroy');

//halaman info pelanggan
//tabel klasifikasi pelanggan
Route::get('/sab', [SABController::class, 'index'])->name('sab.index');
Route::get('/sab/create', [SABController::class, 'create'])->name('sab.create');
Route::post('/sab', [SABController::class, 'store'])->name('sab.store');
Route::get('/sab/{id}', [SABController::class, 'show'])->name('sab.show');
Route::get('/sab/{id}/edit', [SABController::class, 'edit'])->name('sab.edit');
Route::put('/sab/{id}', [SABController::class, 'update'])->name('sab.update');
Route::delete('/sab/{id}', [SABController::class, 'destroy'])->name('sab.destroy');

//halaman Infrastuktur
//sumber air baku
Route::get('/ipam', [IPAMController::class, 'index'])->name('ipam.index');
Route::get('/ipam/create', [IPAMController::class, 'create'])->name('ipam.create');
Route::post('/ipam', [IPAMController::class, 'store'])->name('ipam.store');
Route::get('/ipam/{id}', [IPAMController::class, 'show'])->name('ipam.show');
Route::get('/ipam/{id}/edit', [IPAMController::class, 'edit'])->name('ipam.edit');
Route::put('/ipam/{id}', [IPAMController::class, 'update'])->name('ipam.update');
Route::delete('/ipam/{id}', [IPAMController::class, 'destroy'])->name('ipam.destroy');

//halaman Infrastuktur
//galeri ipa
Route::get('/gi', [GIController::class, 'index'])->name('gi.index');
Route::get('/gi/create', [GIController::class, 'create'])->name('gi.create');
Route::post('/gi', [GIController::class, 'store'])->name('gi.store');
Route::get('/gi/{id}', [GIController::class, 'show'])->name('gi.show');
Route::get('/gi/{id}/edit', [GIController::class, 'edit'])->name('gi.edit');
Route::put('/gi/{id}', [GIController::class, 'update'])->name('gi.update');
Route::delete('/gi/{id}', [GIController::class, 'destroy'])->name('gi.destroy');

//halaman berita
//berita peristiwa

    Route::get('/beritap', [BeritapController::class, 'index'])->name('beritap.index');
    Route::get('/beritap/create', [BeritapController::class, 'create'])->name('beritap.create');
    Route::post('/beritap', [BeritapController::class, 'store'])->name('beritap.store');
    Route::get('/beritap/{id}', [BeritapController::class, 'show'])->name('beritap.show');
    Route::get('/beritap/{id}/edit', [BeritapController::class, 'edit'])->name('beritap.edit');
    Route::put('/beritap/{id}', [BeritapController::class, 'update'])->name('beritap.update');
    Route::delete('/beritap/{id}', [BeritapController::class, 'destroy'])->name('beritap.destroy');


    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
    Route::get('/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
    Route::post('/kegiatan', [KegiatanController::class, 'store'])->name('kegiatan.store');
    Route::get('/kegiatan/{id}', [KegiatanController::class, 'show'])->name('kegiatan.show');
    Route::get('/kegiatan/{id}/edit', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
    Route::put('/kegiatan/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');
    Route::delete('/kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
});

//halaman login
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


// Route untuk menampilkan dashboard admin setelah login berhasil
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

