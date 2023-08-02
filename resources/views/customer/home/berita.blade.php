<!-- resources/views/customer/berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Berita</h1>
        <ul>
            
                <li>
                    <h2>{{ $berita->judul }}</h2>
                    <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar berita">
                    <p>{{ $berita->tanggal }}</p>
                    <p>{{ $berita->keterangan }}</p>
                    <a href="{{ route('customer.home.home.index', ['id' => $berita->id]) }}">Lihat Daftar Terbaru</a>
                </li>
          
        </ul>
    </div>
@endsection