@extends('admin.dashboard')

@section('admin-content')
    <h1>Data Sejarah</h1>

    <a href="{{ route('admin.sejarah.create') }}" class="btn btn-primary">Tambah Data</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sejarah as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>
                        <a href="{{ route('admin.sejarah.show', $data->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('admin.sejarah.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.sejarah.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
