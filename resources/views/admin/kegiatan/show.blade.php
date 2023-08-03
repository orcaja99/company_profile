@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Detail kegiatan</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1>Detail kegiatan</h1>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>ID:</strong> {{ $kegiatan->id }}</p>
                    <p><strong>Judul:</strong> {{ $kegiatan->judul }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Tanggal:</strong> {{ $kegiatan->tanggal }}</p>
                    <p><strong>Keterangan:</strong> {{ $kegiatan->keterangan }}</p>
                    <p><strong>Sumber:</strong> {{ $kegiatan->sumber }}</p>
                </div>
            </div>

            <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>

        <!-- Include Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
@endsection