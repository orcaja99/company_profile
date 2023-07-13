<!-- resources/views/pengumuman/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengumuman</title>
</head>
<body>
    <h1>Daftar Pengumuman</h1>

    @if (session('success'))
    <div>
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('pengumuman.create') }}">Tambah Pengumuman</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengumumans as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->judul }}</td>
                <td>
                    @if($item->gambar)
                    <img src="{{ asset('storage/images/' . $item->gambar) }}" alt="Gambar Pengumuman" width="100">
                    @else
                    Tidak ada gambar
                    @endif
                </td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <a href="{{ route('pengumuman.show', $item->id) }}">Detail</a>
                    <a href="{{ route('pengumuman.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>