@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Kegiatan</h1>
        <ul>
            @foreach($kegiatans as $kegiatan)
                <li>
                <h1>{{ $kegiatan->judul }}</h1>
                <p>Tanggal: {{ $kegiatan->tanggal }}</p>
                <img src="{{ asset('storage/images/' . $kegiatan->gambar) }}" alt="Gambar kegiatan">
                <p>Keterangan: {{ $kegiatan->keterangan }}</p>
                <p>Sumber: {{ $kegiatan->sumber }}</p>
                    <a href="{{ route('customer.kegiatan.kegiatan.show', ['id' => $kegiatan->id]) }}">Lihat Detail</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
