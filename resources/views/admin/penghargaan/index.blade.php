@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <br />
        <title>Daftar penghargaan</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h1>Daftar penghargaan</h1>

            @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
            @endif

            <a href="{{ route('admin.penghargaan.create') }}" class="btn btn-primary mt-3">Tambah penghargaan</a>

            <div class="table-responsive mt-4">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th class="action-btns">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penghargaan as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>
                                @if($item->gambar)
                                <img src="{{ asset('storage/images/' . $item->gambar) }}" alt="Gambar penghargaan" width="100">
                                @else
                                Tidak ada gambar
                                @endif
                            </td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td class="action-btns">
                                <a href="{{ route('admin.penghargaan.show', $item->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('admin.penghargaan.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.penghargaan.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus penghargaan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Include Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
@endsection
