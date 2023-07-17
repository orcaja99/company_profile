<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderFotoController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\PengumumenController;
use App\Http\Controllers\SMTController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SOController;
use App\Http\Controllers\JPController;
use App\Http\Controllers\VmsController;



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
//slider foto
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
Route::put('/vms/{id}', [VmsController::class, 'update'])->name('vms.update');
Route::delete('/vms/{id}', [VmsController::class, 'destroy'])->name('vms.destroy');