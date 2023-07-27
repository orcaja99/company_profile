@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit penghargaan</title>
    </head>
    <body>
        <h1>Edit penghargaan</h1>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('penghargaan.update', $penghargaan->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" value="{{ $penghargaan->judul }}" required>
            </div>
            <div>
                <label for="gambar">Gambar:</label>
                <input type="file" id="gambar" name="gambar">
                @if($penghargaan->gambar)
                <img src="{{ asset('storage/images/' . $penghargaan->gambar) }}" alt="Gambar penghargaan" width="100">
                @endif
            </div>
            <div>
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ $penghargaan->tanggal }}" required>
            </div>
            <div>
                <label for="keterangan">Keterangan:</label>
                <textarea id="keterangan" name="keterangan" required>{{ $penghargaan->keterangan }}</textarea>
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </body>
    </html>
@endsection