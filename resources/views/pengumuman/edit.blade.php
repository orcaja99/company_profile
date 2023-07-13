<!-- resources/views/pengumuman/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengumuman</title>
</head>
<body>
    <h1>Edit Pengumuman</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('pengumuman.update', $pengumuman->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" value="{{ $pengumuman->judul }}" required>
        </div>
        <div>
            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar">
            @if($pengumuman->gambar)
            <img src="{{ asset('storage/images/' . $pengumuman->gambar) }}" alt="Gambar Pengumuman" width="100">
            @endif
        </div>
        <div>
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" value="{{ $pengumuman->tanggal }}" required>
        </div>
        <div>
            <label for="keterangan">Keterangan:</label>
            <textarea id="keterangan" name="keterangan" required>{{ $pengumuman->keterangan }}</textarea>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
