@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Tambah pengumumen</title>
    </head>
    <body>
        <h1>Tambah pengumumen</h1>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('pengumumen.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" required>
            </div>
            <div>
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>
            <div>
                <label for="keterangan">Keterangan:</label>
                <textarea id="keterangan" name="keterangan" required></textarea>
            </div>
            <div>
                <button type="submit">Tambah</button>
            </div>
        </form>
    </body>
    </html>
@endsection