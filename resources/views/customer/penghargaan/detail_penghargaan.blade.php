<!-- resources/views/customer/berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Penghargaan</h1>
        <ul>
                <li>
                    <h2>{{ $penghargaan->judul }}</h2>
                    <img src="{{ asset('storage/images/' . $penghargaan->gambar) }}" alt="Gambar beritap">
                    <p>{{ $penghargaan->tanggal }}</p>
                    <p>{{ $penghargaan->keterangan }}</p>
                    <a href="{{ route('customer.penghargaan.penghargaan.index', ['id' => $penghargaan->id]) }}">Lihat Daftar Penghargaan</a>
                </li>
        </ul>
    </div>
@endsection