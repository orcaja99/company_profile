<!-- resources/views/customer/detail_berita.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
</head>
<body>
    <h1>Detail Berita</h1>
    <h2>{{ $berita->judul }}</h2>
    <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar Berita">
    <p>Tanggal: {{ $berita->tanggal }}</p>
    <p>{{ $berita->keterangan }}</p>
    <a href="{{ route('customer.berita.berita.index') }}">Kembali ke Daftar Berita</a>
</body>
</html>
