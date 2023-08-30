@extends('admin.dashboard')

@section('admin-content')
    <h1>Daftar SMT</h1>

    <a href="{{ route('admin.smt.create') }}" class="btn btn-primary mb-3">Tambah SMT</a>

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
            </tr>
        </thead>
        <tbody>
            @foreach ($smt as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>
                        <!-- <a href="{{ route('admin.smt.show', $data->id) }}" class="btn btn-primary">Lihat</a> -->
                        <a href="{{ route('admin.smt.edit', $data->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('admin.smt.destroy', $data->id) }}" method="POST" class="d-inline">
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
