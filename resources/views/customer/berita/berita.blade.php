<!-- resources/views/customer/berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Berita</h1>
        <ul>
            @foreach($beritas as $berita)
                <li>
                    <h2>{{ $berita->judul }}</h2>
                    <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar berita">
                    <p>{{ $berita->tanggal }}</p>
                    <p>{{ $berita->keterangan }}</p>
                    <a href="{{ route('customer.berita.berita.show', ['id' => $berita->id]) }}">Lihat Detail</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection