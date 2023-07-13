<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderFotoController;
use App\Http\Controllers\beritaController;

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

//halaman home
//berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
