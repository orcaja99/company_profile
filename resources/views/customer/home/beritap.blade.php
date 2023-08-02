<!-- resources/views/customer/berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Berita</h1>
        <ul>
                <li>
                    <h2>{{ $beritap->judul }}</h2>
                    <img src="{{ asset('storage/images/' . $beritap->gambar) }}" alt="Gambar beritap">
                    <p>{{ $beritap->tanggal }}</p>
                    <p>{{ $beritap->keterangan }}</p>
                    <a href="{{ route('customer.home.home.index', ['id' => $beritap->id]) }}">Lihat Daftar Berita Terbaru</a>
                </li>
        </ul>
    </div>
@endsection