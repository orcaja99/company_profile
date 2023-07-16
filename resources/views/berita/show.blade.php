<!-- resources/views/berita/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detail berita</title>
</head>
<body>
    <h1>Detail berita</h1>

    <p>ID: {{ $berita->id }}</p>
    <p>Judul: {{ $berita->judul }}</p>
    <p>Gambar:
        @if($berita->gambar)
        <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar berita" width="100">
        @else
        Tidak ada gambar
        @endif
    </p>
    <p>Tanggal: {{ $berita->tanggal }}</p>
    <p>Keterangan: {{ $berita->keterangan }}</p>

    <a href="{{ route('berita.index') }}">Kembali</a>
</body>
</html>
