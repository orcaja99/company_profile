@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit beritapp</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1>Edit beritap</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('admin.beritap.update', $beritap->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
            <label for="judul">Judul</label>
            <textarea class="form-control" name="judul" id="judul" rows="5" style="height: 200px;">{{ $beritap->judul }}</textarea>
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                    @if($beritap->gambar)
                    <img src="{{ asset('storage/images/' . $beritap->gambar) }}" alt="Gambar beritap" class="mt-2">
                    @endif
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $beritap->tanggal }}" required>
                </div>
                <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" name="keterangan" id="keterangan" rows="5" style="height: 200px;">{{ $beritap->keterangan }}</textarea>
            @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

        </div>
@endsection

