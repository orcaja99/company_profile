<!-- resources/views/customer/berita.blade.php -->
@extends('layouts.app')

@section('content')
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        ol {
            padding: 0;
        }

        li {
            list-style: none;
            display: flex;
            margin-bottom: 20px;
        }

        .number {
            font-weight: bold;
            margin-right: 10px;
        }

        .content {
            flex: 1;
        }
    </style>

    <div class="container">
        <h1>Daftar Berita</h1>
        <ul>
            @foreach($dsb as $index => $data)
                <li>
                    <span class="number">{{ $index + 1 }}.</span>
                    <div class="content">
                        <h2>{{ $data->judul }}</h2>
                        <p>{{ $data->keterangan }}</p>
                        <!-- Jika ada kolom gambar dan tanggal dalam model DSB -->
                        <!-- <img src="{{ asset('storage/images/' . $data->gambar) }}" alt="Gambar DSB"> -->
                        <!-- <p>{{ $data->tanggal }}</p> -->

                        <a href="{{ route('customer.dsb.dsb.show', ['id' => $data->id]) }}">Lihat Detail</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
