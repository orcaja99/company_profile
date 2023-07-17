<!-- resources/views/smt/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar SMT</h1>

    <a href="{{ route('smt.create') }}" class="btn btn-primary mb-3">Tambah SMT</a>

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
                <th>Sub Judul</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($smt as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->sub_judul }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>
                        <a href="{{ route('smt.show', $data->id) }}" class="btn btn-primary">Lihat</a>
                        <a href="{{ route('smt.edit', $data->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('smt.destroy', $data->id) }}" method="POST" class="d-inline">
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
