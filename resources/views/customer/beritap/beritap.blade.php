<!-- resources/views/customer/beritap.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar beritap</title>
</head>
<body>
    <h1>Daftar beritap</h1>
    <ul>
        @foreach($beritaps as $beritap)
        <li>
            <h2>{{ $beritap->judul }}</h2>
            <img src="{{ asset('storage/images/' . $beritap->gambar) }}" alt="Gambar beritap">
            <p>{{ $beritap->tanggal }}</p>
            <a href="{{ route('customer.beritap.beritap.show', ['id' => $beritap->id]) }}">Lihat Detail</a>
        </li>
        @endforeach
    </ul>
</body>
</html>
