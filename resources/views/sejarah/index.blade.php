<!-- resources/views/sejarah/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Data Sejarah</h1>

    <a href="{{ route('sejarah.create') }}" class="btn btn-primary">Tambah Data</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Sub Judul</th>
                <th>Judul Keterangan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sejarah as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->sub_judul }}</td>
                    <td>{{ $data->judul_keterangan }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>
                        <a href="{{ route('sejarah.show', $data->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('sejarah.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('sejarah.destroy', $data->id) }}" method="POST" class="d-inline">
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
