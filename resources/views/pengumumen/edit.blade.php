@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit pengumumen</title>
    </head>
    <body>
        <h1>Edit pengumumen</h1>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('pengumumen.update', $pengumumen->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" value="{{ $pengumumen->judul }}" required>
            </div>
            <div>
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ $pengumumen->tanggal }}" required>
            </div>
            <div>
                <label for="keterangan">Keterangan:</label>
                <textarea id="keterangan" name="keterangan" required>{{ $pengumumen->keterangan }}</textarea>
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </body>
    </html>
@endsection