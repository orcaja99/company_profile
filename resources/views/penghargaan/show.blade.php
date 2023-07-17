<!-- resources/views/penghargaan/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detail penghargaan</title>
</head>
<body>
    <h1>Detail penghargaan</h1>

    <p>ID: {{ $penghargaan->id }}</p>
    <p>Judul: {{ $penghargaan->judul }}</p>
    <p>Gambar:
        @if($penghargaan->gambar)
        <img src="{{ asset('storage/images/' . $penghargaan->gambar) }}" alt="Gambar penghargaan" width="100">
        @else
        Tidak ada gambar
        @endif
    </p>
    <p>Tanggal: {{ $penghargaan->tanggal }}</p>
    <p>Keterangan: {{ $penghargaan->keterangan }}</p>

    <a href="{{ route('penghargaan.index') }}">Kembali</a>
</body>
</html>
