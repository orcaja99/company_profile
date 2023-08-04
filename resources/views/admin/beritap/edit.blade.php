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
            <textarea class="form-control tiny-mce" name="judul" id="judul" rows="5" style="height: 200px;">{{ $beritap->judul }}</textarea>
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
            <textarea class="form-control tiny-mce" name="keterangan" id="keterangan" rows="5" style="height: 200px;">{{ $beritap->keterangan }}</textarea>
            @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <!-- TinyMCE untuk setiap kolom -->
    <script src="https://cdn.tiny.cloud/1/fhnx5fbt5ehz1vnm070er1tz295erjsapr3jr7g3wdy808hw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi TinyMCE untuk setiap textarea dengan class tiny-mce
            tinymce.init({
                selector: 'textarea.tiny-mce',
                plugins: 'lists advlist',
                toolbar: 'undo redo | styleselect | bold italic underline | bullist numlist | alignleft aligncenter alignright alignjustify | outdent indent',
            });
        });
    </script>
        </div>
@endsection

