<!-- resources/views/customer/detail_beritap.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail beritap</title>
</head>
<body>
    <h1>Detail beritap</h1>
    <h2>{{ $beritap->judul }}</h2>
    <img src="{{ asset('storage/images/' . $beritap->gambar) }}" alt="Gambar beritap">
    <p>Tanggal: {{ $beritap->tanggal }}</p>
    <p>{{ $beritap->keterangan }}</p>
    <a href="{{ route('customer.beritap.beritap.index') }}">Kembali ke Daftar beritap</a>
</body>
</html>
