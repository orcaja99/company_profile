@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <br />
        <title>Daftar kegiatan</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       
    </head>
    <body>
        <div class="container mt-4">
            <h1>Daftar kegiatan</h1>

            @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
            @endif

            <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-primary mt-3">Tambah kegiatan</a>

            <div class="table-responsive mt-4">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Sumber</th>
                            <th class="action-btns">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kegiatans as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>
                            @if($item->gambar)
                            <img src="{{ asset('storage/images/' . $item->gambar) }}" alt="Gambar beritap">
                            @else
                            Tidak ada gambar
                            @endif
                        </td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->sumber }}</td>
                            <td class="action-btns">
                                <a href="{{ route('admin.kegiatan.show', $item->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('admin.kegiatan.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.kegiatan.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
