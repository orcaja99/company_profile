@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar penghargaan</h1>
        <ul>
            @foreach($penghargaan as $penghargaan)
                <li>
                <img src="{{ asset('storage/images/' . $penghargaan->gambar) }}" alt="">
                <h1>{{ $penghargaan->judul }}</h1>
                <p>Tanggal: {{ $penghargaan->tanggal }}</p>
                    <a href="{{ route('customer.penghargaan.penghargaan.show', ['id' => $penghargaan->id]) }}">Lihat Detail</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
