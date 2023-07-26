<!-- resources/views/customer/berita.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
</head>
<body>
    <h1>Daftar Berita</h1>
    <ul>
        @foreach($beritas as $berita)
        <li>
            <h2>{{ $berita->judul }}</h2>
            <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Gambar Berita">
            <p>{{ $berita->tanggal }}</p>
            <a href="{{ route('customer.berita.berita.show', ['id' => $berita->id]) }}">Lihat Detail</a>
        </li>
        @endforeach
    </ul>
</body>
</html>
