@extends('admin.dashboard')

@section('admin-content')
    <h1>Cara Daftar Sambungan Baru</h1>

    <a href="{{ route('admin.dsb.create') }}" class="btn btn-primary mb-3">Tambah cara daftar sambungan baru</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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
            @foreach ($dsb as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->sub_judul }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>
                        <a href="{{ route('admin.dsb.show', $data->id) }}" class="btn btn-primary">Lihat</a>
                        <a href="{{ route('admin.dsb.edit', $data->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('admin.dsb.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
