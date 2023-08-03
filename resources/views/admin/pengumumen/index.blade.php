@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Daftar pengumumen</title>
    </head>
    <body>
        <h1>Daftar pengumumen</h1>

        @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif

        <a href="{{ route('admin.pengumumen.create') }}">Tambah pengumumen</a>

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
                @foreach($pengumumens as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('admin.pengumumen.show', $item->id) }}">Detail</a>
                        <a href="{{ route('admin.pengumumen.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('admin.pengumumen.destroy', $item->id) }}" method="POST">
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
@endsection