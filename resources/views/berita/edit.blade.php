<!-- resources/views/berita/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit berita</title>
</head>
<body>
    <h1>Edit berita</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('berita.update', $berita->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" value="{{ $berita->judul }}" required>
        </div>
        <div>
            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar">
            @if($berita->gambar)
            <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar berita" width="100">
            @endif
        </div>
        <div>
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" value="{{ $berita->tanggal }}" required>
        </div>
        <div>
            <label for="keterangan">Keterangan:</label>
            <textarea id="keterangan" name="keterangan" required>{{ $berita->keterangan }}</textarea>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
