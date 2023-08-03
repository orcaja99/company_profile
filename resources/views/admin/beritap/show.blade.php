@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Detail beritap</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1>Detail beritap</h1>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>ID:</strong> {{ $beritap->id }}</p>
                    <p><strong>Judul:</strong> {{ $beritap->judul }}</p>
                    <p>
                        <strong>Gambar:</strong>
                        @if($beritap->gambar)
                        <br>
                        <img src="{{ asset('storage/images/' . $beritap->gambar) }}" alt="Gambar beritap">
                        @else
                        Tidak ada gambar
                        @endif
                    </p>
                </div>
                <div class="col-md-6">
                    <p><strong>Tanggal:</strong> {{ $beritap->tanggal }}</p>
                    <p><strong>Keterangan:</strong> {{ $beritap->keterangan }}</p>
                </div>
            </div>

            <a href="{{ route('admin.beritap.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>

        <!-- Include Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
@endsection