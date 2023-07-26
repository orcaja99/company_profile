<!-- resources/views/customer/berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Berita</h1>
        <ul>
            @foreach($beritaps as $beritap)
                <li>
                    <h2>{{ $beritap->judul }}</h2>
                    <img src="{{ asset('storage/images/' . $beritap->gambar) }}" alt="Gambar beritap">
                    <p>{{ $beritap->tanggal }}</p>
                    <a href="{{ route('customer.beritap.beritap.show', ['id' => $beritap->id]) }}">Lihat Detail</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection