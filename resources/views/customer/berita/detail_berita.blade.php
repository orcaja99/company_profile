<!-- resources/views/customer/detail_berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Berita</h1>
        <h2>{{ $berita->judul }}</h2>
        <img src="{{ asset('storage/images/' . $items->gambar) }}" alt="Gambar Berita">
        <p>Tanggal: {{ $berita->tanggal }}</p>
        <p>{{ $berita->keterangan }}</p>
        <a href="{{ route('customer.berita.berita.index') }}">Kembali ke Daftar Berita</a>
    </div>
@endsection
