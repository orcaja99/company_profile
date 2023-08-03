@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Detail berita</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1>Detail berita</h1>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>ID:</strong> {{ $berita->id }}</p>
                    <p><strong>Judul:</strong> {{ $berita->judul }}</p>
                    <p>
                        <strong>Gambar:</strong>
                        @if($berita->gambar)
                        <br>
                        <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar berita">
                        @else
                        Tidak ada gambar
                        @endif
                    </p>
                </div>
                <div class="col-md-6">
                    <p><strong>Tanggal:</strong> {{ $berita->tanggal }}</p>
                    <p><strong>Keterangan:</strong> {{ $berita->keterangan }}</p>
                </div>
            </div>

            <a href="{{ route('admin.berita.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
@endsection
