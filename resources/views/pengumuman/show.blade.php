<!-- resources/views/pengumuman/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detail Pengumuman</title>
</head>
<body>
    <h1>Detail Pengumuman</h1>

    <p>ID: {{ $pengumuman->id }}</p>
    <p>Judul: {{ $pengumuman->judul }}</p>
    <p>Gambar:
        @if($pengumuman->gambar)
        <img src="{{ asset('storage/images/' . $pengumuman->gambar) }}" alt="Gambar Pengumuman" width="100">
        @else
        Tidak ada gambar
        @endif
    </p>
    <p>Tanggal: {{ $pengumuman->tanggal }}</p>
    <p>Keterangan: {{ $pengumuman->keterangan }}</p>

    <a href="{{ route('pengumuman.index') }}">Kembali</a>
</body>
</html>
