<!-- resources/views/customer/berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Kegiatan</h1>
        <ul>
                <li>
                    <h2>{{ $kegiatan->judul }}</h2>
                    <img src="{{ asset('storage/images/' . $kegiatan->gambar) }}" alt="Gambar beritap">
                    <p>{{ $kegiatan->tanggal }}</p>
                    <p>{{ $kegiatan->keterangan }}</p>
                    <a href="{{ route('customer.kegiatan.kegiatan.index', ['id' => $kegiatan->id]) }}">Lihat Daftar Kegiatan</a>
                </li>
        </ul>
    </div>
@endsection