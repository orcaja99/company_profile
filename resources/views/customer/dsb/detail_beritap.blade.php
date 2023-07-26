<!-- resources/views/customer/detail_berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Berita</h1>
        <h2>{{ $beritap->judul }}</h2>
        <img src="{{ asset('storage/images/' . $beritap->gambar) }}" alt="Gambar Berita">
        <p>Tanggal: {{ $beritap->tanggal }}</p>
        <p>{{ $beritap->keterangan }}</p>
        <a href="{{ route('customer.beritap.beritap.index') }}">Kembali ke Daftar Berita</a>
    </div>
@endsection
